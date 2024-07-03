<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a9a2535e50c265d2c4dd016d85f7623
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Mensagem' => __DIR__ . '/../..' . '/src/Mensagem.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a9a2535e50c265d2c4dd016d85f7623::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a9a2535e50c265d2c4dd016d85f7623::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a9a2535e50c265d2c4dd016d85f7623::$classMap;

        }, null, ClassLoader::class);
    }
}
