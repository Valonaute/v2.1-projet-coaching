<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ8Qkgo1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ8Qkgo1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ8Qkgo1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ8Qkgo1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJ8Qkgo1\App_KernelDevDebugContainer([
    'container.build_hash' => 'J8Qkgo1',
    'container.build_id' => 'e48bf98c',
    'container.build_time' => 1691788357,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ8Qkgo1');
