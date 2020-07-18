<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-foundation/BinaryFileResponse.php-1589634954',
   'data' => 
  array (
    '01c910908fc315503d94a4f47113b0ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * BinaryFileResponse represents an HTTP response delivering a file.
 *
 * @author Niklas Fiekas <niklas.fiekas@tu-clausthal.de>
 * @author stealth35 <stealth35-php@live.fr>
 * @author Igor Wiedler <igor@wiedler.ch>
 * @author Jordan Alliot <jordan.alliot@gmail.com>
 * @author Sergey Linnik <linniksa@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '785a4a00a05e98839ab6a8268e623004' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var File
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '376a9ffdd395112abe4193a4aeab22e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \\SplFileInfo|string $file               The file to stream
     * @param int                 $status             The response status code
     * @param array               $headers            An array of response headers
     * @param bool                $public             Files are public by default
     * @param string|null         $contentDisposition The type of Content-Disposition to set automatically with the filename
     * @param bool                $autoEtag           Whether the ETag header should be automatically set
     * @param bool                $autoLastModified   Whether the Last-Modified header should be automatically set
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edc947fe9c86e89fc480da86f8146c80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \\SplFileInfo|string $file               The file to stream
     * @param int                 $status             The response status code
     * @param array               $headers            An array of response headers
     * @param bool                $public             Files are public by default
     * @param string|null         $contentDisposition The type of Content-Disposition to set automatically with the filename
     * @param bool                $autoEtag           Whether the ETag header should be automatically set
     * @param bool                $autoLastModified   Whether the Last-Modified header should be automatically set
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8eea7d47b2b3788348a43cc02627257' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the file to stream.
     *
     * @param \\SplFileInfo|string $file               The file to stream
     * @param string              $contentDisposition
     * @param bool                $autoEtag
     * @param bool                $autoLastModified
     *
     * @return $this
     *
     * @throws FileException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'setFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '069a0eb940d902bdd4fd088e3355066f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the file.
     *
     * @return File The file to stream
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'getFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3800ef4bd5c6a130627266d69e556ae3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Automatically sets the Last-Modified header according the file modification date.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'setAutoLastModified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11d6455b898bb5e8b7a3948fd8f9b8c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Automatically sets the ETag header according to the checksum of the file.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'setAutoEtag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e575ffe809ab1856727d2ef10150a2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the Content-Disposition header with the given filename.
     *
     * @param string $disposition      ResponseHeaderBag::DISPOSITION_INLINE or ResponseHeaderBag::DISPOSITION_ATTACHMENT
     * @param string $filename         Optionally use this UTF-8 encoded filename instead of the real name of the file
     * @param string $filenameFallback A fallback filename, containing only ASCII characters. Defaults to an automatically encoded filename
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'setContentDisposition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34c727d5b16fe3847af8c64f1ef4c0ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97c4ba102ba036f83b28d432f5cae4bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sends the file.
     *
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'sendContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ba992e96c64180893ab42427c4ab766' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'setContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '639fe30d2362a2235b05f75f2e22e5a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'getContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc55f76952d16d103e179559a22654fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Trust X-Sendfile-Type header.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'trustXSendfileTypeHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32d7723dc71d2d5354d50d4027c9f5a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * If this is set to true, the file will be unlinked after the request is sent
     * Note: If the X-Sendfile header is used, the deleteFileAfterSend setting will not be used.
     *
     * @param bool $shouldDelete
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'file' => 'Symfony\\Component\\HttpFoundation\\File\\File',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
         'functionName' => 'deleteFileAfterSend',
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