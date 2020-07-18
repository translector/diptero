<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/routing/Matcher/UrlMatcherInterface.php-1590868206',
   'data' => 
  array (
    '7e7c0b0d4648aa0e01c075d92aac794d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * UrlMatcherInterface is the interface that all URL matcher classes must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Matcher',
         'uses' => 
        array (
          'methodnotallowedexception' => 'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException',
          'noconfigurationexception' => 'Symfony\\Component\\Routing\\Exception\\NoConfigurationException',
          'resourcenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b45acc1cac6762e48b08b45e017be549' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tries to match a URL path with a set of routes.
     *
     * If the matcher can not find information, it must throw one of the exceptions documented
     * below.
     *
     * @param string $pathinfo The path info to be parsed (raw format, i.e. not urldecoded)
     *
     * @return array An array of parameters
     *
     * @throws NoConfigurationException  If no routing configuration could be found
     * @throws ResourceNotFoundException If the resource could not be found
     * @throws MethodNotAllowedException If the resource was found but the request method is not allowed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Matcher',
         'uses' => 
        array (
          'methodnotallowedexception' => 'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException',
          'noconfigurationexception' => 'Symfony\\Component\\Routing\\Exception\\NoConfigurationException',
          'resourcenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
         'functionName' => 'match',
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