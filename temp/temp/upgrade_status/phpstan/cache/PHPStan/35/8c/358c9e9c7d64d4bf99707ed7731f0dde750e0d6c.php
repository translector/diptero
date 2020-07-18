<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/consolidation/site-process/src/ProcessBase.php-1568138184',
   'data' => 
  array (
    'dafbbdf69dbc1f704d6be72ef17dd1c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A wrapper around Symfony Process.
 *
 * - Supports simulated mode. Typically enabled via a --simulate option.
 * - Supports verbose mode - logs all runs.
 * - Can convert output json data into php array (convenience method)
 * - Provides a "realtime output" helper
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c01cfe8c6cee3a1fe854166172aa4d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var OutputStyle
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae8facfb8d42047db8bf23df7113f65d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var OutputInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e613c5cccb691516a7002d73527e2e2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var LoggerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9491610db3cb2e9a7d6246a1c8fe8ad6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Symfony 4 style constructor for creating Process instances from strings.
     * @param string $command The commandline string to run
     * @param string|null $cwd     The working directory or null to use the working dir of the current PHP process
     * @param array|null $env     The environment variables or null to use the same environment as the current PHP process
     * @param mixed|null $input   The input as stream resource, scalar or \\Traversable, or null for no input
     * @param int|float|null $timeout The timeout in seconds or null to disable
     * @return Process
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'fromShellCommandline',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a72eec0abeed0b4c6a51bc3821ec9c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * realtimeStdout returns the output stream that realtime output
     * should be sent to (if applicable)
     *
     * @return OutputStyle $output
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'realtimeStdout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '534b393a2079aa8e8960265a072c72ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * setRealtimeOutput allows the caller to inject an OutputStyle object
     * that will be used to stream realtime output if applicable.
     *
     * @param OutputStyle $output
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'setRealtimeOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13228f6ad31bb79a11fa9519fc58c0a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'isVerbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd44279b363963edbff738cd199b456eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param bool $verbose
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'setVerbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6705a44329a59550f18d039907253956' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'isSimulated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00ad673e60059a31ed4c9d71dc7fc403' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param bool $simulated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'setSimulated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a7b26a357a6645f42a240214c49fd0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return LoggerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'getLogger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4ce4da8f0360df7e80d9863540fd8cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param LoggerInterface $logger
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'setLogger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d5a1857a5d6e5279652943d1227cd3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @inheritDoc
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'start',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cadd116fdbf1d2259ce8ff7e09e63da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get Process output and decode its JSON.
     *
     * @return array
     *   An associative array.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'getOutputAsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '681b74f599e17bd7a00b107598ca360d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allow for a certain amount of resiliancy in the output received when
     * json is expected.
     *
     * @param string $data
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'removeNonJsonJunk',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9172116a902ce1e518bf58a2daf3335b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return a realTime output object.
     *
     * @return callable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\SiteProcess',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'outputstyle' => 'Symfony\\Component\\Console\\Style\\OutputStyle',
          'process' => 'Symfony\\Component\\Process\\Process',
          'realtimeoutputhandler' => 'Consolidation\\SiteProcess\\Util\\RealtimeOutputHandler',
          'escape' => 'Consolidation\\SiteProcess\\Util\\Escape',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'consoleoutputinterface' => 'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface',
        ),
         'className' => 'Consolidation\\SiteProcess\\ProcessBase',
         'functionName' => 'showRealtime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));