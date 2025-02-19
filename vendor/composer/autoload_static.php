<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4777fb7d82a86dcb051a81b48f1d311b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monocle\\Analytics\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monocle\\Analytics\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4777fb7d82a86dcb051a81b48f1d311b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4777fb7d82a86dcb051a81b48f1d311b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4777fb7d82a86dcb051a81b48f1d311b::$classMap;

        }, null, ClassLoader::class);
    }
}
