<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00c72e6773e131305c2723e403c0956c
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

    public static $classMap = array (
        'App\\Controllers\\CatController' => __DIR__ . '/../..' . '/app/Controllers/CatController.php',
        'App\\Controllers\\CutenessController' => __DIR__ . '/../..' . '/app/Controllers/CutenessController.php',
        'App\\Controllers\\ImageController' => __DIR__ . '/../..' . '/app/Controllers/ImageController.php',
        'App\\Controllers\\MainController' => __DIR__ . '/../..' . '/app/Controllers/MainController.php',
        'App\\Database\\DB' => __DIR__ . '/../..' . '/app/Database/DB.php',
        'App\\Models\\CatHome' => __DIR__ . '/../..' . '/app/Models/Images.php',
        'App\\Models\\Cats' => __DIR__ . '/../..' . '/app/Models/Cats.php',
        'App\\Models\\Cuteness' => __DIR__ . '/../..' . '/app/Models/Cuteness.php',
        'App\\Renderer' => __DIR__ . '/../..' . '/app/Renderer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00c72e6773e131305c2723e403c0956c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00c72e6773e131305c2723e403c0956c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00c72e6773e131305c2723e403c0956c::$classMap;

        }, null, ClassLoader::class);
    }
}
