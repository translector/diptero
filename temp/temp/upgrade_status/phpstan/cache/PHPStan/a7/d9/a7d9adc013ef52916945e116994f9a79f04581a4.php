<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Utility/Environment.php-1594234425',
   'data' => 
  array (
    'a6d1c9c0be3f91d615850766664f7a76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides PHP environment helper methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Environment',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92c7ab767fddfdc82185805db463e8f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares the memory required for an operation to the available memory.
   *
   * @param string $required
   *   The memory required for the operation, expressed as a number of bytes with
   *   optional SI or IEC binary unit prefix (e.g. 2, 3K, 5MB, 10G, 6GiB, 8bytes,
   *   9mbytes).
   * @param $memory_limit
   *   (optional) The memory limit for the operation, expressed as a number of
   *   bytes with optional SI or IEC binary unit prefix (e.g. 2, 3K, 5MB, 10G,
   *   6GiB, 8bytes, 9mbytes). If no value is passed, the current PHP
   *   memory_limit will be used. Defaults to NULL.
   *
   * @return bool
   *   TRUE if there is sufficient memory to allow the operation, or FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Environment',
         'functionName' => 'checkMemoryLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c1134b8009cadb78fc9cebfad2a3f7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attempts to set the PHP maximum execution time.
   *
   * This function is a wrapper around the PHP function set_time_limit(). When
   * called, set_time_limit() restarts the timeout counter from zero. In other
   * words, if the timeout is the default 30 seconds, and 25 seconds into script
   * execution a call such as set_time_limit(20) is made, the script will run
   * for a total of 45 seconds before timing out.
   *
   * If the current time limit is not unlimited it is possible to decrease the
   * total time limit if the sum of the new time limit and the current time
   * spent running the script is inferior to the original time limit. It is
   * inherent to the way set_time_limit() works, it should rather be called with
   * an appropriate value every time you need to allocate a certain amount of
   * time to execute a task than only once at the beginning of the script.
   *
   * Before calling set_time_limit(), we check if this function is available
   * because it could be disabled by the server administrator.
   *
   * @param int $time_limit
   *   An integer time limit in seconds, or 0 for unlimited execution time.
   *
   * @return bool
   *   Whether set_time_limit() was successful or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Environment',
         'functionName' => 'setTimeLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d15de8b12993d8bc8d03d57daa1b1ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the maximum file upload size by querying the PHP settings.
   *
   * @return int
   *   A file size limit in bytes based on the PHP upload_max_filesize and
   *   post_max_size settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Environment',
         'functionName' => 'getUploadMaxSize',
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