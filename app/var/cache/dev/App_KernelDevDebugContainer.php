<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA7WzNji\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA7WzNji/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerA7WzNji.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerA7WzNji\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerA7WzNji\App_KernelDevDebugContainer([
    'container.build_hash' => 'A7WzNji',
    'container.build_id' => 'ea78b0dd',
    'container.build_time' => 1685265157,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA7WzNji');
