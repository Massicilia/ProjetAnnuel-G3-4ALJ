<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXjxzkga\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXjxzkga/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXjxzkga.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXjxzkga\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXjxzkga\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xjxzkga',
    'container.build_id' => '960b07d2',
    'container.build_time' => 1527343312,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXjxzkga');