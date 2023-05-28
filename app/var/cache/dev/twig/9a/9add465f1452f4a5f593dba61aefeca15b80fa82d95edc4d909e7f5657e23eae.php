<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* question/homepage.html.twig */
class __TwigTemplate_300dc83da87c6fc7591e3127cef167b1cad6866c19e852c3f90fad3f38a705c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"jumbotron-img jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <p class=\"lead\">And even answers for those questions you didn't think to ask!</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                            <div class=\"d-block mt-3 vote-arrows\">
                                <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                                <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            </div>
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => "reversing-a-spell"]);
        echo "\"><h2>Reversing a Spell</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">I've been turned into a cat, any thoughts on how to turn back? While I'm adorable, I don't really care for cat food.</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => "reversing-a-spell"]);
        echo "\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> 6 answers
                    </p>
                </a>
            </div>
        </div>

        <div class=\"col-12 mt-3\">
            <div class=\"q-container p-4\">
                <div class=\"row\">
                    <div class=\"col-2 text-center\">
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/magic-photo.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\"  alt=\"Jerry avatar\">
                        <div class=\"d-block mt-3 vote-arrows\">
                            <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <a class=\"q-title\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => "pausing-a-spell"]);
        echo "\"><h2>Pausing a Spell</h2></a>
                        <div class=\"q-display p-3\">
                            <i class=\"fa fa-quote-left mr-3\"></i>
                            <p class=\"d-inline\">I mastered the floating card, but now how do I get it back to the ground?</p>
                            <p class=\"pt-4\"><strong>--Jerry</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"answer-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => "pausing-a-spell"]);
        echo "\" style=\"color: #fff;\">
                <p class=\"q-display-response text-center p-3\">
                    <i class=\"fa fa-magic magic-wand\"></i> 15 answers
                </p>
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 66,  135 => 57,  125 => 50,  110 => 38,  98 => 29,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron-img jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <p class=\"lead\">And even answers for those questions you didn't think to ask!</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ asset('images/tisha.png') }}\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                            <div class=\"d-block mt-3 vote-arrows\">
                                <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                                <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            </div>
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: 'reversing-a-spell' }) }}\"><h2>Reversing a Spell</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">I've been turned into a cat, any thoughts on how to turn back? While I'm adorable, I don't really care for cat food.</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: 'reversing-a-spell' }) }}\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> 6 answers
                    </p>
                </a>
            </div>
        </div>

        <div class=\"col-12 mt-3\">
            <div class=\"q-container p-4\">
                <div class=\"row\">
                    <div class=\"col-2 text-center\">
                        <img src=\"{{ asset('images/magic-photo.png') }}\" width=\"100\" height=\"100\"  alt=\"Jerry avatar\">
                        <div class=\"d-block mt-3 vote-arrows\">
                            <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: 'pausing-a-spell' }) }}\"><h2>Pausing a Spell</h2></a>
                        <div class=\"q-display p-3\">
                            <i class=\"fa fa-quote-left mr-3\"></i>
                            <p class=\"d-inline\">I mastered the floating card, but now how do I get it back to the ground?</p>
                            <p class=\"pt-4\"><strong>--Jerry</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: 'pausing-a-spell' }) }}\" style=\"color: #fff;\">
                <p class=\"q-display-response text-center p-3\">
                    <i class=\"fa fa-magic magic-wand\"></i> 15 answers
                </p>
            </a>
        </div>
    </div>
</div>
{% endblock %}

", "question/homepage.html.twig", "/var/www/public/templates/question/homepage.html.twig");
    }
}
