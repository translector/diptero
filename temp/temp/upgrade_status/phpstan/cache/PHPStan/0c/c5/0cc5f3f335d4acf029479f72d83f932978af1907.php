<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/phpunit/phpunit/src/Framework/MockObject/Matcher/Invocation.php-1578473145',
   'data' => 
  array (
    '94393afe257bdc189adfb75b89f7d481' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for classes which matches an invocation based on its
 * method name, argument, order or call count.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Matcher',
         'uses' => 
        array (
          'baseinvocation' => 'PHPUnit\\Framework\\MockObject\\Invocation',
          'verifiable' => 'PHPUnit\\Framework\\MockObject\\Verifiable',
          'selfdescribing' => 'PHPUnit\\Framework\\SelfDescribing',
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Matcher\\Invocation',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '945679eef4e9d5c420292632953a0869' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers the invocation $invocation in the object as being invoked.
     * This will only occur after matches() returns true which means the
     * current invocation is the correct one.
     *
     * The matcher can store information from the invocation which can later
     * be checked in verify(), or it can check the values directly and throw
     * and exception if an expectation is not met.
     *
     * If the matcher is a stub it will also have a return value.
     *
     * @param BaseInvocation $invocation Object containing information on a mocked or stubbed method which was invoked
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Matcher',
         'uses' => 
        array (
          'baseinvocation' => 'PHPUnit\\Framework\\MockObject\\Invocation',
          'verifiable' => 'PHPUnit\\Framework\\MockObject\\Verifiable',
          'selfdescribing' => 'PHPUnit\\Framework\\SelfDescribing',
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Matcher\\Invocation',
         'functionName' => 'invoked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07f75c3a936621e5a1e43d5421f58688' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the invocation $invocation matches the current rules. If it does
     * the matcher will get the invoked() method called which should check if an
     * expectation is met.
     *
     * @param BaseInvocation $invocation Object containing information on a mocked or stubbed method which was invoked
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Matcher',
         'uses' => 
        array (
          'baseinvocation' => 'PHPUnit\\Framework\\MockObject\\Invocation',
          'verifiable' => 'PHPUnit\\Framework\\MockObject\\Verifiable',
          'selfdescribing' => 'PHPUnit\\Framework\\SelfDescribing',
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Matcher\\Invocation',
         'functionName' => 'matches',
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