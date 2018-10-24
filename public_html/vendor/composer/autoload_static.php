<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite57377d4a79edb5faec2080c3e15e31d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\Exceptions\\' => 16,
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/exceptions',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite57377d4a79edb5faec2080c3e15e31d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite57377d4a79edb5faec2080c3e15e31d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}