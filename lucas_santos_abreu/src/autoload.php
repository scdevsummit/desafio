<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        echo $class;
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'LucasSantosAbreu\\Coffe\\Coffe' => '/LucasSantosAbreu/Coffe/Coffe.php',
            );
        }
        $cn = $class;
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd