<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/file/src/FileUsage/DatabaseFileUsageBackend.php-1594234425',
   'data' => 
  array (
    'e45305137be682441d50194f968313b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the database file usage backend. This is the default Drupal backend.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cd51bafef5933c600e59460b8793af1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection used to store file usage information.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9443f8f0f424d93aa51d2f8fba4707e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the SQL table used to store file usage information.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f38bf21a343fc2a82cab94aca767a228' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Construct the DatabaseFileUsageBackend.
   *
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \\Drupal\\Core\\Database\\Connection $connection
   *   The database connection which will be used to store the file usage
   *   information.
   * @param string $table
   *   (optional) The table to store file usage info. Defaults to \'file_usage\'.
   *
   * @todo Properly type-hint the constructor arguments in
   *   https://www.drupal.org/project/drupal/issues/3070114 when the
   *   drupal:9.0.x branch is opened.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70cff3710f7a3a0f4416fe19d834f46f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => 'add',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '590efbdd215c1f519db5bafb0cde7f85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38552c4463337017aaf2a1c263d9f5cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\FileUsage',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'fileinterface' => 'Drupal\\file\\FileInterface',
        ),
         'className' => 'Drupal\\file\\FileUsage\\DatabaseFileUsageBackend',
         'functionName' => 'listUsage',
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