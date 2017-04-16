<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'templado\\cli\\directory' => '/Directory.php',
                'templado\\cli\\directoryexception' => '/DirectoryException.php',
                'templado\\cli\\exception' => '/Exception.php',
                'templado\\cli\\factory' => '/Factory.php',
                'templado\\cli\\generator' => '/Generator.php',
                'templado\\cli\\generatorconfig' => '/GeneratorConfig.php',
                'templado\\cli\\gitversion' => '/version/GitVersion.php',
                'templado\\cli\\logger' => '/logger/Logger.php',
                'templado\\cli\\request' => '/Request.php',
                'templado\\cli\\requestexception' => '/RequestException.php',
                'templado\\cli\\runner' => '/Runner.php',
                'templado\\cli\\silentlogger' => '/logger/SilentLogger.php',
                'templado\\cli\\staticversion' => '/version/StaticVersion.php',
                'templado\\cli\\verboselogger' => '/logger/VerboseLogger.php',
                'templado\\cli\\version' => '/version/Version.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
