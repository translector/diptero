<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-foundation/File/File.php-1589634954',
   'data' => 
  array (
    '82fb337db3a984c8cf37773d343708f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A file in the file system.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
          'mimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a7f771b95db8e0f509cecc4c28435a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Constructs a new file from the given path.
     *
     * @param string $path      The path to the file
     * @param bool   $checkPath Whether to check the path or not
     *
     * @throws FileNotFoundException If the given path is not a file
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
          'mimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e029c9d7ba84ead8c0e0bbba56f59745' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the extension based on the mime type.
     *
     * If the mime type is unknown, returns null.
     *
     * This method uses the mime type as guessed by getMimeType()
     * to guess the file extension.
     *
     * @return string|null The guessed extension or null if it cannot be guessed
     *
     * @see ExtensionGuesser
     * @see getMimeType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
          'mimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'guessExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d8888f0b1d9a4b0809280f8a11c1f8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the mime type of the file.
     *
     * The mime type is guessed using a MimeTypeGuesser instance, which uses finfo(),
     * mime_content_type() and the system binary "file" (in this order), depending on
     * which of those are available.
     *
     * @return string|null The guessed mime type (e.g. "application/pdf")
     *
     * @see MimeTypeGuesser
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
          'mimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'getMimeType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68bc62e84c464d5ac24a137f873d18de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves the file to a new location.
     *
     * @param string $directory The destination folder
     * @param string $name      The new file name
     *
     * @return self A File object representing the new file
     *
     * @throws FileException if the target file could not be created
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
          'mimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'move',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '517d50030cb78c4a1b24ba607ec63d76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns locale independent base name of the given path.
     *
     * @param string $name The new file name
     *
     * @return string containing
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
          'mimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'getName',
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