<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNm1pct7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNm1pct7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNm1pct7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNm1pct7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNm1pct7\appDevDebugProjectContainer([
    'container.build_hash' => 'Nm1pct7',
    'container.build_id' => 'fa62971a',
    'container.build_time' => 1578943453,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNm1pct7');
