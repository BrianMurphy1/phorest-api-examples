<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit954970c3f24ea555e86af026d35d7174
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit954970c3f24ea555e86af026d35d7174::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
