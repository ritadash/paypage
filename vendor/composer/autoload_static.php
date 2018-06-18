<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39f7305990480e9b8ed813edd0adf60e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39f7305990480e9b8ed813edd0adf60e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39f7305990480e9b8ed813edd0adf60e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
