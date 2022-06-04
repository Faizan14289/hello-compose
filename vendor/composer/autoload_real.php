<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite65f6f7a7314efd9d6e1ad47131a92d8
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite65f6f7a7314efd9d6e1ad47131a92d8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite65f6f7a7314efd9d6e1ad47131a92d8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite65f6f7a7314efd9d6e1ad47131a92d8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
