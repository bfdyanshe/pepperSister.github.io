<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1646b7870fcb90f116435f9a1b86a4b1
{
    public static $files = array (
        '65fec9ebcfbb3cbb4fd0d519687aea01' => __DIR__ . '/..' . '/danielstjules/stringy/src/Create.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stringy\\' => 8,
            'Simplon\\Mysql\\' => 14,
            'Simplon\\Mustache\\' => 17,
            'Simplon\\Helper\\' => 15,
            'Simplon\\Email\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stringy\\' => 
        array (
            0 => __DIR__ . '/..' . '/danielstjules/stringy/src',
        ),
        'Simplon\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/src',
        ),
        'Simplon\\Mustache\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mustache/src',
        ),
        'Simplon\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/helper/src',
        ),
        'Simplon\\Email\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/email/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1646b7870fcb90f116435f9a1b86a4b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1646b7870fcb90f116435f9a1b86a4b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}