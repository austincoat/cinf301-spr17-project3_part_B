<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26690916e32250a6e05a65f1effc040a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26690916e32250a6e05a65f1effc040a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26690916e32250a6e05a65f1effc040a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
