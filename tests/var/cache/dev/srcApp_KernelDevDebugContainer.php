<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQpydrHz\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQpydrHz/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQpydrHz.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQpydrHz\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQpydrHz\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QpydrHz',
    'container.build_id' => '7ffca76b',
    'container.build_time' => 1639806695,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQpydrHz');
