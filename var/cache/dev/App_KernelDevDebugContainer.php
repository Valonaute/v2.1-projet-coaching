<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCSr72NS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCSr72NS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCSr72NS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCSr72NS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCSr72NS\App_KernelDevDebugContainer([
    'container.build_hash' => 'CSr72NS',
    'container.build_id' => '56219010',
    'container.build_time' => 1692369526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCSr72NS');
