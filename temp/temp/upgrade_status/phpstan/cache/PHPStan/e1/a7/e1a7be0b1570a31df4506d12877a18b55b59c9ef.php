<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/process/Process.php-1590253551',
   'data' => 
  array (
    'f5b1f618f61fb3ed486437b596c39ac7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Process is a thin wrapper around proc_* functions to easily
 * start independent PHP processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Romain Neutron <imprec@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bd4c6b73656ed24bc0cd79006fdba9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var PipesInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5abfc4f212cad277edfa5b7913a51674' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Exit codes translation table.
     *
     * User-defined errors must use exit codes in the 64-113 range.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2c70b47dc86a1b7a038d8c81842b71e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string|array   $commandline The command line to run
     * @param string|null    $cwd         The working directory or null to use the working dir of the current PHP process
     * @param array|null     $env         The environment variables or null to use the same environment as the current PHP process
     * @param mixed|null     $input       The input as stream resource, scalar or \\Traversable, or null for no input
     * @param int|float|null $timeout     The timeout in seconds or null to disable
     * @param array          $options     An array of options for proc_open
     *
     * @throws RuntimeException When proc_open is not installed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4998fd4fee90ed7c8bc4d6c45c5f9927' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Runs the process.
     *
     * The callback receives the type of output (out or err) and
     * some bytes from the output in real-time. It allows to have feedback
     * from the independent process during execution.
     *
     * The STDOUT and STDERR are also available after the process is finished
     * via the getOutput() and getErrorOutput() methods.
     *
     * @param callable|null $callback A PHP callback to run whenever there is some
     *                                output available on STDOUT or STDERR
     *
     * @return int The exit status code
     *
     * @throws RuntimeException When process can\'t be launched
     * @throws RuntimeException When process stopped after receiving signal
     * @throws LogicException   In case a callback is provided and output has been disabled
     *
     * @final since version 3.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'run',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d8e3cd121fa177fe6ac6b60649cb649' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Runs the process.
     *
     * This is identical to run() except that an exception is thrown if the process
     * exits with a non-zero exit code.
     *
     * @return $this
     *
     * @throws RuntimeException       if PHP was compiled with --enable-sigchild and the enhanced sigchild compatibility mode is not enabled
     * @throws ProcessFailedException if the process didn\'t terminate successfully
     *
     * @final since version 3.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'mustRun',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdcf3d3bf9630fe52a31bffc535af848' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Starts the process and returns after writing the input to STDIN.
     *
     * This method blocks until all STDIN data is sent to the process then it
     * returns while the process runs in the background.
     *
     * The termination of the process can be awaited with wait().
     *
     * The callback receives the type of output (out or err) and some bytes from
     * the output in real-time while writing the standard input to the process.
     * It allows to have feedback from the independent process during execution.
     *
     * @param callable|null $callback A PHP callback to run whenever there is some
     *                                output available on STDOUT or STDERR
     *
     * @throws RuntimeException When process can\'t be launched
     * @throws RuntimeException When process is already running
     * @throws LogicException   In case a callback is provided and output has been disabled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'start',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b26fa32dadd58cbbc51f9e7aec384b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Restarts the process.
     *
     * Be warned that the process is cloned before being started.
     *
     * @param callable|null $callback A PHP callback to run whenever there is some
     *                                output available on STDOUT or STDERR
     *
     * @return static
     *
     * @throws RuntimeException When process can\'t be launched
     * @throws RuntimeException When process is already running
     *
     * @see start()
     *
     * @final since version 3.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'restart',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0ed4a63776dbebbb483e37d09f3b900' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Waits for the process to terminate.
     *
     * The callback receives the type of output (out or err) and some bytes
     * from the output in real-time while writing the standard input to the process.
     * It allows to have feedback from the independent process during execution.
     *
     * @param callable|null $callback A valid PHP callback
     *
     * @return int The exitcode of the process
     *
     * @throws RuntimeException When process timed out
     * @throws RuntimeException When process stopped after receiving signal
     * @throws LogicException   When process is not yet started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'wait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7a0c1534c5cc86acdeb21f97926b1c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the Pid (process identifier), if applicable.
     *
     * @return int|null The process id if running, null otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getPid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec43a6d20dc7eb1dacb8fdce306377ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sends a POSIX signal to the process.
     *
     * @param int $signal A valid POSIX signal (see https://php.net/pcntl.constants)
     *
     * @return $this
     *
     * @throws LogicException   In case the process is not running
     * @throws RuntimeException In case --enable-sigchild is activated and the process can\'t be killed
     * @throws RuntimeException In case of failure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'signal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81917941b2a860485246fbff580d03b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Disables fetching output and error output from the underlying process.
     *
     * @return $this
     *
     * @throws RuntimeException In case the process is already running
     * @throws LogicException   if an idle timeout is set
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'disableOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd87073eced6741858c6c64ff31379b91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Enables fetching output and error output from the underlying process.
     *
     * @return $this
     *
     * @throws RuntimeException In case the process is already running
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'enableOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'daa535edea8af399495961486b1d46e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true in case the output is disabled, false otherwise.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isOutputDisabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f829352dcf6dac64ab15b4c1d817c4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current output of the process (STDOUT).
     *
     * @return string The process output
     *
     * @throws LogicException in case the output has been disabled
     * @throws LogicException In case the process is not started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f852161aa93045e9c1575091ea10360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the output incrementally.
     *
     * In comparison with the getOutput method which always return the whole
     * output, this one returns the new output since the last call.
     *
     * @return string The process output since the last call
     *
     * @throws LogicException in case the output has been disabled
     * @throws LogicException In case the process is not started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getIncrementalOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed1571d8166da78b4ddedba35667609a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an iterator to the output of the process, with the output type as keys (Process::OUT/ERR).
     *
     * @param int $flags A bit field of Process::ITER_* flags
     *
     * @throws LogicException in case the output has been disabled
     * @throws LogicException In case the process is not started
     *
     * @return \\Generator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f7b64367aab7ed2451c66c6b7be4b54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clears the process output.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'clearOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '214289c24ae8dcaa847fdb8580c08ece' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current error output of the process (STDERR).
     *
     * @return string The process error output
     *
     * @throws LogicException in case the output has been disabled
     * @throws LogicException In case the process is not started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getErrorOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '872ed935ab5690e5b136b332a319a5ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the errorOutput incrementally.
     *
     * In comparison with the getErrorOutput method which always return the
     * whole error output, this one returns the new error output since the last
     * call.
     *
     * @return string The process error output since the last call
     *
     * @throws LogicException in case the output has been disabled
     * @throws LogicException In case the process is not started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getIncrementalErrorOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb7978e56f815061f8b8210051e96b90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clears the process output.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'clearErrorOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8541edfdbc05e16df93a845ccb0f5a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the exit code returned by the process.
     *
     * @return int|null The exit status code, null if the Process is not terminated
     *
     * @throws RuntimeException In case --enable-sigchild is activated and the sigchild compatibility mode is disabled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getExitCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '131c47ed6c35ac787c0eff6a4670af75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a string representation for the exit code returned by the process.
     *
     * This method relies on the Unix exit code status standardization
     * and might not be relevant for other operating systems.
     *
     * @return string|null A string representation for the exit status code, null if the Process is not terminated
     *
     * @see http://tldp.org/LDP/abs/html/exitcodes.html
     * @see http://en.wikipedia.org/wiki/Unix_signal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getExitCodeText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd54d289198cab55b010956d65af8fed9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the process ended successfully.
     *
     * @return bool true if the process ended successfully, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63fa6d9bd36816caae73db7bb20f554e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the child process has been terminated by an uncaught signal.
     *
     * It always returns false on Windows.
     *
     * @return bool
     *
     * @throws RuntimeException In case --enable-sigchild is activated
     * @throws LogicException   In case the process is not terminated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'hasBeenSignaled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '833fb569182f7bcc9623041719c99967' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the number of the signal that caused the child process to terminate its execution.
     *
     * It is only meaningful if hasBeenSignaled() returns true.
     *
     * @return int
     *
     * @throws RuntimeException In case --enable-sigchild is activated
     * @throws LogicException   In case the process is not terminated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getTermSignal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e95594ebaef3d5e8d31dd8f082fac3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the child process has been stopped by a signal.
     *
     * It always returns false on Windows.
     *
     * @return bool
     *
     * @throws LogicException In case the process is not terminated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'hasBeenStopped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd13b18b4a02fb9bdaf5055a278b01b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the number of the signal that caused the child process to stop its execution.
     *
     * It is only meaningful if hasBeenStopped() returns true.
     *
     * @return int
     *
     * @throws LogicException In case the process is not terminated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getStopSignal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a649a10faa358edb2cd35357fa69f131' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the process is currently running.
     *
     * @return bool true if the process is currently running, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isRunning',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d9e5ae5f26bd6f4f063f6eb28a8e334' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the process has been started with no regard to the current state.
     *
     * @return bool true if status is ready, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isStarted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4a426f1e90a43bcbfadebdecec61de9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the process is terminated.
     *
     * @return bool true if process is terminated, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isTerminated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '794a9f0d6d827cdb235f6f0605185df3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the process status.
     *
     * The status is one of: ready, started, terminated.
     *
     * @return string The current process status
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e92e8eae5ad27fc6152b1244880d76e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Stops the process.
     *
     * @param int|float $timeout The timeout in seconds
     * @param int       $signal  A POSIX signal to send in case the process has not stop at timeout, default is SIGKILL (9)
     *
     * @return int|null The exit-code of the process or null if it\'s not running
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'stop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f413853e955cd53c9f33b70d5ef7980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a line to the STDOUT stream.
     *
     * @internal
     *
     * @param string $line The line to append
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'addOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98c7d31347a5ac0dea09ec753e406d21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a line to the STDERR stream.
     *
     * @internal
     *
     * @param string $line The line to append
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'addErrorOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7f57fd2db3e0f6e69b20618b9e4ec0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the command line to be executed.
     *
     * @return string The command to execute
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getCommandLine',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70e888f7e1d4fc3939764f2fd19e8d2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the command line to be executed.
     *
     * @param string|array $commandline The command to execute
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setCommandLine',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eff2b49c5f8813c9721f74885c0ad529' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the process timeout (max. runtime).
     *
     * @return float|null The timeout in seconds or null if it\'s disabled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9412708693873dd404048dee1df91e2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the process idle timeout (max. time since last output).
     *
     * @return float|null The timeout in seconds or null if it\'s disabled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getIdleTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5dcebc5b00cad544725ffc7aae8c484' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the process timeout (max. runtime) in seconds.
     *
     * To disable the timeout, set this value to null.
     *
     * @param int|float|null $timeout The timeout in seconds
     *
     * @return $this
     *
     * @throws InvalidArgumentException if the timeout is negative
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29ef5444369fa25874149a82e69d2d5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the process idle timeout (max. time since last output).
     *
     * To disable the timeout, set this value to null.
     *
     * @param int|float|null $timeout The timeout in seconds
     *
     * @return $this
     *
     * @throws LogicException           if the output is disabled
     * @throws InvalidArgumentException if the timeout is negative
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setIdleTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a20a1e2d05f9ad70cb09fd009161b4be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Enables or disables the TTY mode.
     *
     * @param bool $tty True to enabled and false to disable
     *
     * @return $this
     *
     * @throws RuntimeException In case the TTY mode is not supported
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setTty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48c716da477ac33dda696367bf6343b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the TTY mode is enabled.
     *
     * @return bool true if the TTY mode is enabled, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isTty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdd054c880f68106dae7bfca408b093d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets PTY mode.
     *
     * @param bool $bool
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setPty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f44217c7c202620d370b82914b450c80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns PTY state.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isPty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dce6c8acde0bc86823e34b9015f4f23d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the working directory.
     *
     * @return string|null The current working directory or null on failure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getWorkingDirectory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fd095442cde192069739facfdaa84f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the current working directory.
     *
     * @param string $cwd The new working directory
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setWorkingDirectory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3be0c43b75fc02ddb67f666a91104ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the environment variables.
     *
     * @return array The current environment variables
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getEnv',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '601cdea94c50ea3e9f80ac400fbc544e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the environment variables.
     *
     * Each environment variable value should be a string.
     * If it is an array, the variable is ignored.
     * If it is false or null, it will be removed when
     * env vars are otherwise inherited.
     *
     * That happens in PHP when \'argv\' is registered into
     * the $_ENV array for instance.
     *
     * @param array $env The new environment variables
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setEnv',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa7e5c84cdce7f393c162382d8a7ba28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the Process input.
     *
     * @return resource|string|\\Iterator|null The Process input
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd28efba30f516a61b243d2de2593b99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the input.
     *
     * This content will be passed to the underlying process standard input.
     *
     * @param string|int|float|bool|resource|\\Traversable|null $input The content
     *
     * @return $this
     *
     * @throws LogicException In case the process is running
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20c089ea75d554b2c927748796a89570' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the options for proc_open.
     *
     * @return array The current options
     *
     * @deprecated since version 3.3, to be removed in 4.0.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8332288bc76f0c53dc15d3e12e874a03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the options for proc_open.
     *
     * @param array $options The new options
     *
     * @return $this
     *
     * @deprecated since version 3.3, to be removed in 4.0.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a53a07f5f91ed609b44d7bb08fe770d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets whether or not Windows compatibility is enabled.
     *
     * This is true by default.
     *
     * @return bool
     *
     * @deprecated since version 3.3, to be removed in 4.0. Enhanced Windows compatibility will always be enabled.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getEnhanceWindowsCompatibility',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39f650cce0da6fb9951eb160b1ecb31d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets whether or not Windows compatibility is enabled.
     *
     * @param bool $enhance
     *
     * @return $this
     *
     * @deprecated since version 3.3, to be removed in 4.0. Enhanced Windows compatibility will always be enabled.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setEnhanceWindowsCompatibility',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29a7eacafbf06046996fe0b2281ef83a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether sigchild compatibility mode is activated or not.
     *
     * @return bool
     *
     * @deprecated since version 3.3, to be removed in 4.0. Sigchild compatibility will always be enabled.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getEnhanceSigchildCompatibility',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2c2727268b5224dc8c9cdc1c41ab79e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Activates sigchild compatibility mode.
     *
     * Sigchild compatibility mode is required to get the exit code and
     * determine the success of a process when PHP has been compiled with
     * the --enable-sigchild option
     *
     * @param bool $enhance
     *
     * @return $this
     *
     * @deprecated since version 3.3, to be removed in 4.0.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'setEnhanceSigchildCompatibility',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff2321acbe2f9b4ef8637b1f58e1161b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets whether environment variables will be inherited or not.
     *
     * @param bool $inheritEnv
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'inheritEnvironmentVariables',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f2c510234f308c8e002f8e5764c95a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether environment variables will be inherited or not.
     *
     * @return bool
     *
     * @deprecated since version 3.3, to be removed in 4.0. Environment variables will always be inherited.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'areEnvironmentVariablesInherited',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f77ee04b9cfb5dcee581a3dae772fb42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs a check between the timeout definition and the time the process started.
     *
     * In case you run a background process (with the start method), you should
     * trigger this method regularly to ensure the process timeout
     *
     * @throws ProcessTimedOutException In case the timeout was reached
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'checkTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c93f237d117e2833f37fac0e82397be0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether PTY is supported on the current operating system.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isPtySupported',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e0611da5b22ac2f420eadb98aad5111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates the descriptors needed by the proc_open.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'getDescriptors',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39aca5b7104779b36cbb95cb60f79fac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Builds up the callback used by wait().
     *
     * The callbacks adds all occurred output to the specific buffer and calls
     * the user callback (if present) with the received output.
     *
     * @param callable|null $callback The user defined PHP callback
     *
     * @return \\Closure A PHP closure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'buildCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16c18190560de5581e05d7aead543dd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Updates the status of the process, reads pipes.
     *
     * @param bool $blocking Whether to use a blocking read call
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'updateStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a95255af1a3ce95d414941e374af9a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether PHP has been compiled with the \'--enable-sigchild\' option or not.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'isSigchildEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05badf3c13d05917d2b0cd0bf325da98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reads pipes for the freshest output.
     *
     * @param string $caller   The name of the method that needs fresh outputs
     * @param bool   $blocking Whether to use blocking calls or not
     *
     * @throws LogicException in case output has been disabled or process is not started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'readPipesForOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cc01c1e2a54c01c74695b6a71d945ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validates and returns the filtered timeout.
     *
     * @param int|float|null $timeout
     *
     * @return float|null
     *
     * @throws InvalidArgumentException if the given timeout is a negative number
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'validateTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cc3f7c21837a645694b651fdc5132c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reads pipes, executes callback.
     *
     * @param bool $blocking Whether to use blocking calls or not
     * @param bool $close    Whether to close file handles or not
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'readPipes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15bfcd8d4f7e2dcb6b533cad9595200e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Closes process resource, closes file handles, sets the exitcode.
     *
     * @return int The exitcode
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'close',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cebd616029a2e2849fc3d8ba72a31117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets data related to the latest run of the process.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'resetProcessData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf256eeae2ecb78e9d995b9177fca773' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sends a POSIX signal to the process.
     *
     * @param int  $signal         A valid POSIX signal (see https://php.net/pcntl.constants)
     * @param bool $throwException Whether to throw exception in case signal failed
     *
     * @return bool True if the signal was sent successfully, false otherwise
     *
     * @throws LogicException   In case the process is not running
     * @throws RuntimeException In case --enable-sigchild is activated and the process can\'t be killed
     * @throws RuntimeException In case of failure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'doSignal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92b9bc0f1b9a45e3b7e2abb9b8126457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Ensures the process is running or terminated, throws a LogicException if the process has a not started.
     *
     * @param string $functionName The function name that was called
     *
     * @throws LogicException if the process has not run
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'requireProcessIsStarted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1074d6ae92a78ca6d9483320cd78f4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Ensures the process is terminated, throws a LogicException if the process has a status different than `terminated`.
     *
     * @param string $functionName The function name that was called
     *
     * @throws LogicException if the process is not yet terminated
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'requireProcessIsTerminated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc43ee6a269e6a6dddf2907a66b52e5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Escapes a string to be used as a shell argument.
     *
     * @param string $argument The argument that will be escaped
     *
     * @return string The escaped argument
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Process',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Process\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Process\\Exception\\LogicException',
          'processfailedexception' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
          'processtimedoutexception' => 'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException',
          'runtimeexception' => 'Symfony\\Component\\Process\\Exception\\RuntimeException',
          'pipesinterface' => 'Symfony\\Component\\Process\\Pipes\\PipesInterface',
          'unixpipes' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
          'windowspipes' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
        ),
         'className' => 'Symfony\\Component\\Process\\Process',
         'functionName' => 'escapeArgument',
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