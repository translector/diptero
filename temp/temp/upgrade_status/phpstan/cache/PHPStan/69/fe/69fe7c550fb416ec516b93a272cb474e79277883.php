<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php-1591959427',
   'data' => 
  array (
    'c166a50b70b18b474df448a013ec1439' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An ArgumentResolverInterface instance knows how to determine the
 * arguments for a specific action.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Controller',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea48de835b885bf11c5d01ca5d8ef02c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the arguments to pass to the controller.
     *
     * @param callable $controller
     *
     * @return array An array of arguments to pass to the controller
     *
     * @throws \\RuntimeException When no value could be provided for a required argument
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Controller',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
         'functionName' => 'getArguments',
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