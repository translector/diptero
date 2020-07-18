<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandler/RemotePostWebformHandler.php-1594690523',
   'data' => 
  array (
    'f9871e802c97987ac262acefba7fefca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform submission remote post handler.
 *
 * @WebformHandler(
 *   id = "remote_post",
 *   label = @Translation("Remote post"),
 *   category = @Translation("External"),
 *   description = @Translation("Posts webform submissions to a URL."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 *   tokens = TRUE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c3dda972541d1c900b7e369d6ce3a75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '567d57fa1d2c2ed48b09de52a8315cd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The HTTP client to fetch the feed data with.
   *
   * @var \\GuzzleHttp\\ClientInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a057cce6056adbc1d3e8cb894f1f48a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3900c1e7bedf2a56ac493ffab86b7eee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform message manager.
   *
   * @var \\Drupal\\webform\\WebformMessageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d88903a9a06ac0a41346c58413133d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element plugin manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66739dc965536a7936d1858ccecda2f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current request.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\Request
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39f75f2c6c898daf1005a432d558e695' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The DrupalKernel instance used in the test.
   *
   * @var \\Drupal\\Core\\DrupalKernel
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5d58cba196224cbadf2546a8ef09492' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of unsupported webform submission properties.
   *
   * The below properties will not being included in a remote post.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '046aba43be9f776c7ca98965ef9d4553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9c550145122679d6ccb9cb22d0ca8d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d86f3d78f4883a0baef0a1ef6b24082' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffd810d7c26bd1e59d4aa8d545b31f73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20cb1c53e8b9b54c2cea001879706f21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50fc38c3bbf64d9106f38e9a0f15541c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b82f55585c91d560d87ea27d6634ea7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b654ece5e3f18a81fadd8781c9e6020' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Execute a remote post.
   *
   * @param string $state
   *   The state of the webform submission.
   *   Either STATE_NEW, STATE_DRAFT_CREATED, STATE_DRAFT_UPDATED,
   *   STATE_COMPLETED, STATE_UPDATED, or STATE_CONVERTED
   *   depending on the last save operation performed.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   The webform submission to be posted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'remotePost',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0142f09076f9dd697788817790b9fc91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a webform submission\'s request data.
   *
   * @param string $state
   *   The state of the webform submission.
   *   Either STATE_NEW, STATE_DRAFT_CREATED, STATE_DRAFT_UPDATED,
   *   STATE_COMPLETED, STATE_UPDATED, or STATE_CONVERTED
   *   depending on the last save operation performed.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   The webform submission to be posted.
   *
   * @return array
   *   A webform submission converted to an associative array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getRequestData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '336116bb7a0d06b7f9c46ea5fbc97520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cast request values.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\Plugin\\WebformElementInterface $element_plugin
   *   The element\'s webform plugin.
   * @param mixed $value
   *   The element\'s value.
   *
   * @return mixed
   *   The element\'s values cast to boolean or float when appropriate.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'castRequestValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4ad6029227bdb7ded3b20bf196e9f27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cast request value.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\Plugin\\WebformElementInterface $element_plugin
   *   The element\'s webform plugin.
   * @param mixed $value
   *   The element\'s value.
   *
   * @return mixed
   *   The element\'s value cast to boolean or float when appropriate.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'castRequestValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9022f4df4d1a71f1c5bca51ddcc39801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cast custom data.
   *
   * @param array $data
   *   Custom data.
   *
   * @return array
   *   The custom data with value casted
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'castCustomData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '567da5e0d7f837ccca776433ce81068a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get request file data.
   *
   * @param int $fid
   *   A file id.
   * @param string|null $prefix
   *   A prefix to prepended to data.
   *
   * @return array
   *   An associative array containing file data (name, uri, mime, and data).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getRequestFileData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9633496c1e35c5817954e80e1002dab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface $file */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getRequestFileData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5e10af78431f80f773ae87bbb2065d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get response data.
   *
   * @param \\Psr\\Http\\Message\\ResponseInterface $response
   *   The response returned by the remote server.
   *
   * @return array|string
   *   An array of data, parse from JSON, or a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getResponseData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3beb576961903c50a00b0eb04246d8c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform handler tokens from response data.
   *
   * @param mixed $data
   *   Response data.
   * @param array $parents
   *   Webform handler token parents.
   *
   * @return array
   *   A list of webform handler tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getResponseTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7157c17360cab3ab3c71d38b5766940e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if saving of results is enabled.
   *
   * @return bool
   *   TRUE if saving of results is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'isResultsEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a9f8c7fc466dfd78437603ebee94a83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if saving of draft is enabled.
   *
   * @return bool
   *   TRUE if saving of draft is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'isDraftEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0eae70c20e813ecb70f2f54171df55df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if converting anonymous submissions to authenticated is enabled.
   *
   * @return bool
   *   TRUE if converting anonymous submissions to authenticated is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'isConvertEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3c6706bfcc547baaf5cad6c596682b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display debugging information.
   *
   * @param string $message
   *   Message to be displayed.
   * @param string $state
   *   The state of the webform submission.
   *   Either STATE_NEW, STATE_DRAFT_CREATED, STATE_DRAFT_UPDATED,
   *   STATE_COMPLETED, STATE_UPDATED, or STATE_CONVERTED
   *   depending on the last save operation performed.
   * @param string $request_url
   *   The remote URL the request is being posted to.
   * @param string $request_method
   *   The method of remote post.
   * @param string $request_type
   *   The type of remote post.
   * @param string $request_options
   *   The requests options including the submission data.
   * @param \\Psr\\Http\\Message\\ResponseInterface|null $response
   *   The response returned by the remote server.
   * @param string $type
   *   The type of message to be displayed to the end use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'debug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d3005335e4d530fd7caf11d3bd773bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handle error by logging and display debugging and/or exception message.
   *
   * @param string $state
   *   The state of the webform submission.
   *   Either STATE_NEW, STATE_DRAFT_CREATED, STATE_DRAFT_UPDATED,
   *   STATE_COMPLETED, STATE_UPDATED, or STATE_CONVERTED
   *   depending on the last save operation performed.
   * @param string $message
   *   Message to be displayed.
   * @param string $request_url
   *   The remote URL the request is being posted to.
   * @param string $request_method
   *   The method of remote post.
   * @param string $request_type
   *   The type of remote post.
   * @param string $request_options
   *   The requests options including the submission data.
   * @param \\Psr\\Http\\Message\\ResponseInterface|null $response
   *   The response returned by the remote server.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'handleError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fab55dc040e2d10609437d5bbd30918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get custom response message.
   *
   * @param \\Psr\\Http\\Message\\ResponseInterface|null $response
   *   The response returned by the remote server.
   * @param bool $default
   *   Display the default message. Defaults to TRUE.
   *
   * @return string
   *   A custom response message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'getCustomResponseMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08b694b0611a56fd779ac4f492de1b50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display custom response message.
   *
   * @param \\Psr\\Http\\Message\\ResponseInterface|null $response
   *   The response returned by the remote server.
   * @param bool $default
   *   Display the default message. Defaults to TRUE.
   *
   * @return bool
   *   TRUE if custom response message is displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'displayCustomResponseMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3e3309e79f2543d6e6e8c177959ea3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if response has an error status code.
   *
   * @param \\Psr\\Http\\Message\\ResponseInterface|null $response
   *   The response returned by the remote server.
   *
   * @return bool
   *   TRUE if response status code reflects an unsuccessful value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'responseHasError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '807cbffda2ac447aafeb183d1aa9e8e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformmessagemanagerinterface' => 'Drupal\\webform\\WebformMessageManagerInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
         'functionName' => 'buildTokenTreeElement',
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