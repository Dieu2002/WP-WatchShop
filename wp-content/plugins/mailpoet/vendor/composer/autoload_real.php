<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInit76c44f0053fca8e9a798ba3d9f0b8baf
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInit76c44f0053fca8e9a798ba3d9f0b8baf', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInit76c44f0053fca8e9a798ba3d9f0b8baf', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInit76c44f0053fca8e9a798ba3d9f0b8baf::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInit76c44f0053fca8e9a798ba3d9f0b8baf::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequire76c44f0053fca8e9a798ba3d9f0b8baf($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequire76c44f0053fca8e9a798ba3d9f0b8baf($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
