<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerULNtkhx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerULNtkhx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerULNtkhx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerULNtkhx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerULNtkhx\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'ULNtkhx',
    'container.build_id' => '23747a9b',
    'container.build_time' => 1551794567,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerULNtkhx');
