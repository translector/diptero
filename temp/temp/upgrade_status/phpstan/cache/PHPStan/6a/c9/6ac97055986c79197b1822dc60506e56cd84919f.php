<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-foundation/FileBag.php-1589634954',
   'data' => 
  array (
    '8bc4f8dd04cf867c22d06d69fa0d985e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * FileBag is a container for uploaded files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2e5dcef3555aac4661604a192a2e3f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array $parameters An array of HTTP files
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f1b3f4ee094c1b85c00f9d591d498d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => 'replace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afa88f98e0ac336a6f82560935cef725' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8e3c5ba048e2254d19145547161ea6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => 'add',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd080e34dc58f53caf224ee294f0a4dfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Converts uploaded files to UploadedFile instances.
     *
     * @param array|UploadedFile $file A (multi-dimensional) array of uploaded file information
     *
     * @return UploadedFile[]|UploadedFile|null A (multi-dimensional) array of UploadedFile instances
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => 'convertFileInformation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebf4f28982db691a60a0c928629ac168' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fixes a malformed PHP $_FILES array.
     *
     * PHP has a bug that the format of the $_FILES array differs, depending on
     * whether the uploaded file fields had normal field names or array-like
     * field names ("normal" vs. "parent[child]").
     *
     * This method fixes the array to look like the "normal" $_FILES array.
     *
     * It\'s safe to pass an already converted array, in which case this method
     * just returns the original array unmodified.
     *
     * @param array $data
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\FileBag',
         'functionName' => 'fixPhpFilesArray',
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