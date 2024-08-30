<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c10264626bba4a0d06aeb671c60ab28
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c10264626bba4a0d06aeb671c60ab28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c10264626bba4a0d06aeb671c60ab28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c10264626bba4a0d06aeb671c60ab28::$classMap;

        }, null, ClassLoader::class);
    }
}
