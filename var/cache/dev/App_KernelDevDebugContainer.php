<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH3actfx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH3actfx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerH3actfx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerH3actfx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerH3actfx\App_KernelDevDebugContainer([
    'container.build_hash' => 'H3actfx',
    'container.build_id' => '5084e4bf',
    'container.build_time' => 1692957403,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH3actfx');
