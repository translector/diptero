<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php-1589634954',
   'data' => 
  array (
    '7f7153a7a87acdda434a46e9fcc6ca01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Guesses the mime type of a file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType',
         'uses' => 
        array (
          'accessdeniedexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10e5406e54534f24cf4d7c87671f8446' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Guesses the mime type of the file with the given path.
     *
     * @param string $path The path to the file
     *
     * @return string|null The mime type or NULL, if none could be guessed
     *
     * @throws FileNotFoundException If the file does not exist
     * @throws AccessDeniedException If the file could not be read
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType',
         'uses' => 
        array (
          'accessdeniedexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
         'functionName' => 'guess',
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