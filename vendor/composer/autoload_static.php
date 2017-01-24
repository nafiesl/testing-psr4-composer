<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87bec7a60748439782e5432caaf72e17
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Foo\\Bar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Foo\\Bar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87bec7a60748439782e5432caaf72e17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87bec7a60748439782e5432caaf72e17::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
