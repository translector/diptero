<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-foundation/File/UploadedFile.php-1589634954',
   'data' => 
  array (
    'de623e69fb90bbe611d9a7b5834e534d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A file uploaded through a form.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8797a2d2cb118cc7c8d645e9b14904e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Accepts the information of the uploaded file as provided by the PHP global $_FILES.
     *
     * The file object is only created when the uploaded file is valid (i.e. when the
     * isValid() method returns true). Otherwise the only methods that could be called
     * on an UploadedFile instance are:
     *
     *   * getClientOriginalName,
     *   * getClientMimeType,
     *   * isValid,
     *   * getError.
     *
     * Calling any other method on an non-valid instance will cause an unpredictable result.
     *
     * @param string      $path         The full temporary path to the file
     * @param string      $originalName The original file name of the uploaded file
     * @param string|null $mimeType     The type of the file as provided by PHP; null defaults to application/octet-stream
     * @param int|null    $size         The file size provided by the uploader
     * @param int|null    $error        The error constant of the upload (one of PHP\'s UPLOAD_ERR_XXX constants); null defaults to UPLOAD_ERR_OK
     * @param bool        $test         Whether the test mode is active
     *                                  Local files are used in test mode hence the code should not enforce HTTP uploads
     *
     * @throws FileException         If file_uploads is disabled
     * @throws FileNotFoundException If the file does not exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff890bb7562082f62d3c9d5cbe7b159a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the original file name.
     *
     * It is extracted from the request from which the file has been uploaded.
     * Then it should not be considered as a safe value.
     *
     * @return string The original name
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getClientOriginalName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99057622cf5920695fcdf1e4cfd7ea51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the original file extension.
     *
     * It is extracted from the original file name that was uploaded.
     * Then it should not be considered as a safe value.
     *
     * @return string The extension
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getClientOriginalExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '296e1f2ed7f6b56a051851efca370744' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the file mime type.
     *
     * The client mime type is extracted from the request from which the file
     * was uploaded, so it should not be considered as a safe value.
     *
     * For a trusted mime type, use getMimeType() instead (which guesses the mime
     * type based on the file content).
     *
     * @return string The mime type
     *
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
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getClientMimeType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8ccad24db305923bec5d5a3a4b4a218' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the extension based on the client mime type.
     *
     * If the mime type is unknown, returns null.
     *
     * This method uses the mime type as guessed by getClientMimeType()
     * to guess the file extension. As such, the extension returned
     * by this method cannot be trusted.
     *
     * For a trusted extension, use guessExtension() instead (which guesses
     * the extension based on the guessed mime type for the file).
     *
     * @return string|null The guessed extension or null if it cannot be guessed
     *
     * @see guessExtension()
     * @see getClientMimeType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'guessClientExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71c5c2110039695e418a442238a6c0d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the file size.
     *
     * It is extracted from the request from which the file has been uploaded.
     * Then it should not be considered as a safe value.
     *
     * @return int|null The file size
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getClientSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70ff4cbd5d6249643b6899d3043074c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the upload error.
     *
     * If the upload was successful, the constant UPLOAD_ERR_OK is returned.
     * Otherwise one of the other UPLOAD_ERR_XXX constants is returned.
     *
     * @return int The upload error
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15138e74699ba437abb11fe094daf7d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether the file was uploaded successfully.
     *
     * @return bool True if the file has been uploaded with HTTP and no error occurred
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'isValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76f53dda615b211eb8157ea608488e29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves the file to a new location.
     *
     * @param string $directory The destination folder
     * @param string $name      The new file name
     *
     * @return File A File object representing the new file
     *
     * @throws FileException if, for any reason, the file could not have been moved
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'move',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2e614743703751dfd76857d8059eb55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the maximum size of an uploaded file as configured in php.ini.
     *
     * @return int The maximum size of an uploaded file in bytes
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getMaxFilesize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3660dffdc2d3a3b307568a07a964e688' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the given size from an ini value in bytes.
     *
     * @return int The given size in bytes
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'parseFilesize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '675c4b00b7492720ffa4bad906fd5c47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an informative upload error message.
     *
     * @return string The error message regarding the specified error code
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'extensionguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
         'functionName' => 'getErrorMessage',
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