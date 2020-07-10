<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b22a14ef3b6320a2babfcf8d9d34296
{
    public static $classMap = array (
        'App\\controllers\\ArticleController' => __DIR__ . '/../..' . '/app/controllers/ArticleController.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\core\\database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\core\\database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'ComposerAutoloaderInit3b22a14ef3b6320a2babfcf8d9d34296' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit3b22a14ef3b6320a2babfcf8d9d34296' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3b22a14ef3b6320a2babfcf8d9d34296::$classMap;

        }, null, ClassLoader::class);
    }
}
