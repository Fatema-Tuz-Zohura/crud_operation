<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a393f0112b5a86a19d170b06b9d2cb0
{
    public static $files = array (
        '4ccae0c1b242f0fbb272fef3c7ea46cf' => __DIR__ . '/../..' . '/helpers/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a393f0112b5a86a19d170b06b9d2cb0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a393f0112b5a86a19d170b06b9d2cb0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
