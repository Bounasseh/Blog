<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKmZ7sRw\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKmZ7sRw/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKmZ7sRw.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKmZ7sRw\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKmZ7sRw\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KmZ7sRw',
    'container.build_id' => '6491105d',
    'container.build_time' => 1647515983,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKmZ7sRw');
