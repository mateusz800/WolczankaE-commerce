<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJoxpkib\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJoxpkib/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJoxpkib.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJoxpkib\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJoxpkib\appProdProjectContainer([
    'container.build_hash' => 'Joxpkib',
    'container.build_id' => '41020bec',
    'container.build_time' => 1578572095,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJoxpkib');
