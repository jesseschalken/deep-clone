<?php

// !! Generated by: vendor/jesseschalken/autoload-generator/bin/generate-autoload src/include.php

spl_autoload_register(function ($class) {
    static $map = array (
  'MagicUtils\\CloneNotSupportedException' => 'MagicUtils.php',
  'MagicUtils\\DeepClone' => 'MagicUtilsTraits.php',
  'MagicUtils\\NoClone' => 'MagicUtilsTraits.php',
  'MagicUtils\\NoDynamicMethods' => 'MagicUtilsTraits.php',
  'MagicUtils\\NoDynamicProperties' => 'MagicUtilsTraits.php',
  'MagicUtils\\NoMagic' => 'MagicUtilsTraits.php',
  'MagicUtils\\NoSerialize' => 'MagicUtilsTraits.php',
  'MagicUtils\\SerializeNotSupportedException' => 'MagicUtils.php',
  'MagicUtils\\Test\\A' => 'MagicUtilsTest.php',
  'MagicUtils\\Test\\A2' => 'MagicUtilsTest.php',
  'MagicUtils\\Test\\B' => 'MagicUtilsTest.php',
  'MagicUtils\\Test\\Test' => 'MagicUtilsTest.php',
  'MagicUtils\\UndefinedMethodException' => 'MagicUtils.php',
  'MagicUtils\\UndefinedPropertyException' => 'MagicUtils.php',
);

    if (isset($map[$class]))
        require_once __DIR__ . "/{$map[$class]}";
}, true, false);

require_once __DIR__ . '/MagicUtils.php';
