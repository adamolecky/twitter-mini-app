<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8T9uHyi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8T9uHyi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8T9uHyi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8T9uHyi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8T9uHyi\App_KernelDevDebugContainer([
    'container.build_hash' => '8T9uHyi',
    'container.build_id' => 'adf68a3b',
    'container.build_time' => 1657544706,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8T9uHyi');
