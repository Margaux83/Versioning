<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOdyCmez\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOdyCmez/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOdyCmez.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOdyCmez\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOdyCmez\App_KernelDevDebugContainer([
    'container.build_hash' => 'OdyCmez',
    'container.build_id' => 'b669b5eb',
    'container.build_time' => 1610463927,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOdyCmez');