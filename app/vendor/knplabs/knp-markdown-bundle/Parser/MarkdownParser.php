<?php

namespace Knp\Bundle\MarkdownBundle\Parser;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;

use Michelf\MarkdownExtra;

/**
 * MarkdownParser
 *
 * This class extends the original Markdown parser.
 * It allows to disable unwanted features to increase performances.
 */
class MarkdownParser extends MarkdownExtra implements MarkdownParserInterface
{
    /**
     * Use the constructor to disable some of them
     *
     * @var array Enabled features
     */
    protected $features = array(
        'header' => true,
        'list' => true,
        'horizontal_rule' => true,
        'table' => true,
        'foot_note' => true,
        'fenced_code_block' => true,
        'abbreviation' => true,
        'definition_list' => true,
        'inline_link' => true, // [link text](url "optional title")
        'reference_link' => true, // [link text] [id]
        'shortcut_link' => true, // [link text]
        'images' => true,
        'block_quote' => true,
        'code_block' => true,
        'html_block' => true,
        'auto_link' => true,
        'auto_mailto' => true,
        'entities' => true,
        'no_html' => false,
    );

    /**
     * Create a new instance and enable or disable features.
     * @param array $features   enabled or disabled features
     *
     * You can pass an array of features to disable some of them for performance improvement.
     * E.g.
     * $features = array(
     *     'table' => false,
     *     'definition_list' => false
     * )
     */
    public function __construct(array $features = array())
    {
        parent::__construct();

        $this->features = array_merge($this->features, $features);

        if (!$this->features['header']) {
            unset($this->block_gamut['doHeaders']);
        }
        if (!$this->features['list']) {
            unset($this->block_gamut['doLists']);
        }
        if (!$this->features['horizontal_rule']) {
            unset($this->block_gamut['doHorizontalRules']);
        }
        if (!$this->features['table']) {
            unset($this->block_gamut['doTables']);
        }
        if (!$this->features['foot_note']) {
            unset($this->document_gamut['stripFootnotes']);
            unset($this->document_gamut['appendFootnotes']);
            unset($this->span_gamut['doFootnotes']);
        }
        if (!$this->features['fenced_code_block']) {
            unset($this->document_gamut['doFencedCodeBlocks']);
            unset($this->block_gamut['doFencedCodeBlocks']);
        }
        if (!$this->features['abbreviation']) {
            unset($this->document_gamut['stripAbbreviations']);
            unset($this->span_gamut['doAbbreviations']);
        }
        if (!$this->features['definition_list']) {
            unset($this->block_gamut['doDefLists']);
        }
        if (!$this->features['reference_link']) {
            unset($this->document_gamut['stripLinkDefinitions']);
        }
        if (!$this->features['images']) {
            unset($this->span_gamut['doImages']);
        }
        if (!$this->features['block_quote']) {
            unset($this->block_gamut['doBlockQuotes']);
        }
        if (!$this->features['code_block']) {
            unset($this->block_gamut['doCodeBlocks']);
        }
        if (!$this->features['auto_link']) {
            unset($this->span_gamut['doAutoLinks']);
        }
        if (false === $this->features['entities']) {
            $this->no_entities = true;
        }
        if (true === $this->features['no_html']) {
            $this->no_markup = true;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function transformMarkdown($text)
    {
        return parent::transform($text);
    }

    /**
     * MarkdownExtraParser overwritten methods
     */

    /**
     * Simplify detab
     */
    public function detab($text): string
    {
        return str_replace("\t", str_repeat(' ', $this->tab_width), $text);
    }

    public function _initDetab()
    {
        return;
    }

    /**
     * Disable unless html_block
     */
    public function hashHTMLBlocks($text)
    {
        if (!$this->features['html_block']) {
            return $text;
        }

        return parent::hashHTMLBlocks($text);
    }

    /**
     * Disable mailto unless auto_mailto
     */
    public function doAutoLinks($text)
    {
        if (!$this->features['auto_mailto']) {
            return preg_replace_callback('{<((https?|ftp|dict):[^\'">\s]+)>}i', array(&$this, '_doAutoLinks_url_callback'), $text);
        }

        return parent::doAutoLinks($text);
    }

    /**
     * Conditional features: reference_link, inline_link,
     */
    public function doAnchors($text)
    {
        #
        # Turn Markdown link shortcuts into XHTML <a> tags.
        #
        if ($this->in_anchor) {
            return $text;
        }
        $this->in_anchor = true;

        #
        # First, handle reference-style links: [link text] [id]
        #
        if ($this->features['reference_link']) {
            $text = preg_replace_callback('{
                (               # wrap whole match in $1
                  \[
                    ('.$this->nested_brackets_re.')	# link text = $2
                  \]

                  [ ]?          # one optional space
                  (?:\n[ ]*)?   # one optional newline followed by spaces

                  \[
                    (.*?)       # id = $3
                  \]
                )
                }xs',
            array(&$this, '_doAnchors_reference_callback'), $text);
        }

        #
        # Next, inline-style links: [link text](url "optional title")
        #
        if ($this->features['inline_link']) {
            $text = preg_replace_callback('{
                (               # wrap whole match in $1
                  \[
                    ('.$this->nested_brackets_re.')	# link text = $2
                  \]
                  \(            # literal parent
                    [ \n]*
                    (?:
                        <(.+?)> # href = $3
                    |
                        ('.$this->nested_url_parenthesis_re.')	# href = $4
                    )
                    [ \n]*
                    (           # $5
                      ([\'"])   # quote char = $6
                      (.*?)     # Title = $7
                      \6        # matching quote
                      [ \n]*    # ignore any spaces/tabs between closing quote and )
                    )?          # title is optional
                  \)
                  (?:[ ]? '.$this->id_class_attr_catch_re.' )?	 # $8 = id/class attributes
                )
                }xs',
            array(&$this, '_doAnchors_inline_callback'), $text);
        }

        #
        # Last, handle reference-style shortcuts: [link text]
        # These must come last in case you've also got [link text][1]
        # or [link text](/foo)
        #
        if ($this->features['shortcut_link']) {
            $text = preg_replace_callback('{
                (               # wrap whole match in $1
                  \[
                    ([^\[\]]+)  # link text = $2; can\'t contain [ or ]
                  \]
                )
                }xs',
            array(&$this, '_doAnchors_reference_callback'), $text);
        }

        $this->in_anchor = false;

        return $text;
    }
}
