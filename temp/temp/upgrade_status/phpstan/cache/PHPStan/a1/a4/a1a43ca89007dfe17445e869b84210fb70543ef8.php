<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/StreamWrapper/StreamWrapperInterface.php-1594234425',
   'data' => 
  array (
    '789bc9b3b52467e4378bb4f7f12eb583' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a Drupal stream wrapper extension.
 *
 * Provides a Drupal interface and classes to implement PHP stream wrappers for
 * public, private, and temporary files. Extends the PhpStreamWrapperInterface
 * with methods expected by Drupal stream wrapper classes.
 *
 * A stream wrapper is an abstraction of a file system that allows Drupal to
 * use the same set of methods to access both local files and remote resources.
 *
 * Note that PHP 5.2 fopen() only supports URIs of the form "scheme://target"
 * despite the fact that according to RFC 3986 a URI\'s scheme component
 * delimiter is in general just ":", not "://".  Because of this PHP limitation
 * and for consistency Drupal will only accept URIs of form "scheme://target".
 *
 * @see http://www.faqs.org/rfcs/rfc3986.html
 * @see http://bugs.php.net/bug.php?id=47070
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a41e95374cff8a3630b11283269fb0b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A filter that matches all wrappers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e7f93c8505598c6036937ccc1162cd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stream wrapper bit flags that are the basis for composite types.
   *
   * Note that 0x0002 is skipped, because it was the value of a constant that
   * has since been removed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '371299d926d4c7c067616f90b8980da7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refers to a local file system location.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb734f2b7b76c9c4e3b2318c3396e213' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wrapper is readable (almost always true).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6d62faeb084018b27610278c9d7baae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wrapper is writable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd875fba873b88e1c1826b88003d5892a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Exposed in the UI and potentially web accessible.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '567f1b3c85ecde9343127784f32bbb6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the stream wrapper bit flag for a hidden file.
   *
   * This is not visible in the UI or accessible via web, but readable and
   * writable; for instance, the temporary directory for file uploads.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5aef11ed10e57f55e7f62b1fe9570c7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Composite stream wrapper bit flags that are usually used as the types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7d812638588265d24d69214079a1925' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Hidden, readable and writable using local files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd02be60e3f90287e57047b7aba9f5b66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Visible, readable and writable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d4b27232fd412d45f1716b77abba467' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Visible and read-only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab6fc5e7bdb43f87801ee587ff37e234' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * This is the default \'type\' flag. This does not include
   * StreamWrapperInterface::LOCAL, because PHP grants a greater trust level to
   * local files (for example, they can be used in an "include" statement,
   * regardless of the "allow_url_include" setting), so stream wrappers need to
   * explicitly opt-in to this.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea3522d53200aa053b104adc951b5910' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Visible, readable and writable using local files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16cce6f150fbcde51934ec5909b4cb34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the type of stream wrapper.
   *
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'getType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f79d452ab1c97e48a80d9c86be79ca85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of the stream wrapper for use in the UI.
   *
   * @return string
   *   The stream wrapper name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c6245307eab253d7654a7fa6ded6915' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the description of the stream wrapper for use in the UI.
   *
   * @return string
   *   The stream wrapper description.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8236e0d7d7a08e5f6958f1e179392d05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the absolute stream resource URI.
   *
   * This allows you to set the URI. Generally is only called by the factory
   * method.
   *
   * @param string $uri
   *   A string containing the URI that should be used for this instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'setUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79f86f5d95a3084e129bfd82590ed5cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the stream resource URI.
   *
   * @return string
   *   Returns the current URI of the instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'getUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a92cb0fed476ee5bfdf98f70ecf6aae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a web accessible URL for the resource.
   *
   * This function should return a URL that can be embedded in a web page
   * and accessed from a browser. For example, the external URL of
   * "youtube://xIpLd0WQKCY" might be
   * "http://www.youtube.com/watch?v=xIpLd0WQKCY".
   *
   * @return string
   *   Returns a string containing a web accessible URL for the resource.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'getExternalUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ede8bcc6322a96d696c7ab2ed581c7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns canonical, absolute path of the resource.
   *
   * Implementation placeholder. PHP\'s realpath() does not support stream
   * wrappers. We provide this as a default so that individual wrappers may
   * implement their own solutions.
   *
   * @return string
   *   Returns a string with absolute pathname on success (implemented
   *   by core wrappers), or FALSE on failure or if the registered
   *   wrapper does not provide an implementation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'realpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1792752b4ebbbc06eed421151865f591' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the directory from a given path.
   *
   * This method is usually accessed through
   * \\Drupal\\Core\\File\\FileSystemInterface::dirname(), which wraps around the
   * normal PHP dirname() function, which does not support stream wrappers.
   *
   * @param string $uri
   *   An optional URI.
   *
   * @return string
   *   A string containing the directory name, or FALSE if not applicable.
   *
   * @see \\Drupal\\Core\\File\\FileSystemInterface::dirname()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
         'functionName' => 'dirname',
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