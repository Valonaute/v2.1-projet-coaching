<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8s7B2sv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8s7B2sv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8s7B2sv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8s7B2sv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8s7B2sv\App_KernelDevDebugContainer([
    'container.build_hash' => '8s7B2sv',
    'container.build_id' => 'fee629f4',
    'container.build_time' => 1691741101,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8s7B2sv');
