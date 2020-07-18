<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/StreamWrapper/PhpStreamWrapperInterface.php-1594234425',
   'data' => 
  array (
    '894a7a1a52b998c7b0a802be8a3339ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a generic PHP stream wrapper interface.
 *
 * @see http://php.net/manual/class.streamwrapper.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0426797d8bd6be33e3ad83fc06f5bb8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'dir_closedir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97b44222a1190004f0725c1795c06356' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'dir_opendir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79898c775a071604bc4b742caf034eac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'dir_readdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7203491bfd8993f854aade463dc9498' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'dir_rewinddir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05a37830b0cd001d6c16371870d40469' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'mkdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bda8b7b6f3ca015e6c1a110a0b8ba90c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'rename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b13e0468826bb255ab77f27a38128cbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'rmdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa56e5679c4eea59d1b43805d077c75d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve the underlying stream resource.
   *
   * This method is called in response to stream_select().
   *
   * @param int $cast_as
   *   Can be STREAM_CAST_FOR_SELECT when stream_select() is calling
   *   stream_cast() or STREAM_CAST_AS_STREAM when stream_cast() is called for
   *   other uses.
   *
   * @return resource|false
   *   The underlying stream resource or FALSE if stream_select() is not
   *   supported.
   *
   * @see stream_select()
   * @see http://php.net/manual/streamwrapper.stream-cast.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_cast',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27fed754d8cbe45a8b072a7e7accc646' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Closes stream.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_close',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a73b3abc42eb7755eb3b1d1f510bf748' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_eof',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9edba79d3a98a7716d3f25f850d6a48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_flush',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20908ae32d2d4768e33d136a2c77749e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_lock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25013821363dd7419027d2b13334ba78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets metadata on the stream.
   *
   * @param string $path
   *   A string containing the URI to the file to set metadata on.
   * @param int $option
   *   One of:
   *   - STREAM_META_TOUCH: The method was called in response to touch().
   *   - STREAM_META_OWNER_NAME: The method was called in response to chown()
   *     with string parameter.
   *   - STREAM_META_OWNER: The method was called in response to chown().
   *   - STREAM_META_GROUP_NAME: The method was called in response to chgrp().
   *   - STREAM_META_GROUP: The method was called in response to chgrp().
   *   - STREAM_META_ACCESS: The method was called in response to chmod().
   * @param mixed $value
   *   If option is:
   *   - STREAM_META_TOUCH: Array consisting of two arguments of the touch()
   *     function.
   *   - STREAM_META_OWNER_NAME or STREAM_META_GROUP_NAME: The name of the owner
   *     user/group as string.
   *   - STREAM_META_OWNER or STREAM_META_GROUP: The value of the owner
   *     user/group as integer.
   *   - STREAM_META_ACCESS: The argument of the chmod() as integer.
   *
   * @return bool
   *   Returns TRUE on success or FALSE on failure. If $option is not
   *   implemented, FALSE should be returned.
   *
   * @see http://php.net/manual/streamwrapper.stream-metadata.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_metadata',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '738e768fe9e826d3d37c502151dbb471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_open',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a407e1274b888df80c5d820b7287d11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_read',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39e8c7230ee35e71bb0eff7ccd226161' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Seeks to specific location in a stream.
   *
   * This method is called in response to fseek().
   *
   * The read/write position of the stream should be updated according to the
   * offset and whence.
   *
   * @param int $offset
   *   The byte offset to seek to.
   * @param int $whence
   *   Possible values:
   *   - SEEK_SET: Set position equal to offset bytes.
   *   - SEEK_CUR: Set position to current location plus offset.
   *   - SEEK_END: Set position to end-of-file plus offset.
   *   Defaults to SEEK_SET.
   *
   * @return bool
   *   TRUE if the position was updated, FALSE otherwise.
   *
   * @see http://php.net/manual/streamwrapper.stream-seek.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_seek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc51e5259ca3885f66a022d434252036' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Change stream options.
   *
   * This method is called to set options on the stream.
   *
   * @param int $option
   *   One of:
   *   - STREAM_OPTION_BLOCKING: The method was called in response to
   *     stream_set_blocking().
   *   - STREAM_OPTION_READ_TIMEOUT: The method was called in response to
   *     stream_set_timeout().
   *   - STREAM_OPTION_WRITE_BUFFER: The method was called in response to
   *     stream_set_write_buffer().
   * @param int $arg1
   *   If option is:
   *   - STREAM_OPTION_BLOCKING: The requested blocking mode:
   *     - 1 means blocking.
   *     - 0 means not blocking.
   *   - STREAM_OPTION_READ_TIMEOUT: The timeout in seconds.
   *   - STREAM_OPTION_WRITE_BUFFER: The buffer mode, STREAM_BUFFER_NONE or
   *     STREAM_BUFFER_FULL.
   * @param int $arg2
   *   If option is:
   *   - STREAM_OPTION_BLOCKING: This option is not set.
   *   - STREAM_OPTION_READ_TIMEOUT: The timeout in microseconds.
   *   - STREAM_OPTION_WRITE_BUFFER: The requested buffer size.
   *
   * @return bool
   *   TRUE on success, FALSE otherwise. If $option is not implemented, FALSE
   *   should be returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_set_option',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c0ce071dc5d856a6b92114c85e2c9f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_stat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac98d156c38c5431e724961cd6c29523' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_tell',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cc32195e574120de5d359641736362a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Truncate stream.
   *
   * Will respond to truncation; e.g., through ftruncate().
   *
   * @param int $new_size
   *   The new size.
   *
   * @return bool
   *   TRUE on success, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_truncate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e49536de60962c5ef33b048f07f6ad7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'stream_write',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f3cfe0843b7331e8b0f870d50ca4de2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'unlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dcc7ec9d1c51b3118fd9904298aa261' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\PhpStreamWrapperInterface',
         'functionName' => 'url_stat',
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