<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandlerBase.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformEntityInjectionTrait.php-1594690523',
   'data' => 
  array (
    'eb91fbb47b809abb85d64c86d9862bd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for a webform handler.
 *
 * @see \\Drupal\\webform\\Plugin\\WebformHandlerInterface
 * @see \\Drupal\\webform\\Plugin\\WebformHandlerManager
 * @see \\Drupal\\webform\\Plugin\\WebformHandlerManagerInterface
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65eb443d21da9a209b803457fbdb045a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an webform/webform submission entity inject trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8478cdcea42f8b4b63f7928989c6614' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ff1c29cc78bb91cf95d1f5965198bbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission.
   *
   * @var \\Drupal\\webform\\WebformSubmissionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dda0ba1eaf370a75b8c653baa1161f08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the webform that this is handler is attached to.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return $this
   *   This webform handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'debabbeca10e96ba457ab26a347b3f06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform that this handler is attached to.
   *
   * @return \\Drupal\\webform\\WebformInterface
   *   A webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4193d2bf4b96de09734ef8251b4ca780' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform submission that this handler is handling.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c6585ef10fb92cbec453606aa517da1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set webform and webform submission entity.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface
   *   A webform submission.
   *
   * @throws \\Exception
   *   Throw exception if entity type is not a webform or webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f1ff269cdc4f38da0c84eab9212d76f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc1933477d8b8b358f0836b79a41f44f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset webform and webform submission entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'resetEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cbb4ca09e025fcc17d1b08f2735cff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81617ec6926c29d64fd96fdd53d5b083' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission.
   *
   * @var \\Drupal\\webform\\WebformSubmissionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c34c515f59ef76b105a6e803c8bb867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform handler ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fc0b8aad055695de4c00d58b5bdea35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform handler label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99c8b0f73f16e0fe733117ed94a90940' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform handler status.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88bcca6fadceca1f645b19737e6441de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The weight of the webform handler.
   *
   * @var int|string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10f60a38f1fa1ada4a21425fdbced538' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform handler\'s conditions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5f6a5f87fd7bb5f4f85ee18657f69c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '538a142170046a5534f2a7312030cea1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger factory.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab4206cb5842da709ce6f327d90546de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b86e70dec9edce001491a9ba32b77ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission storage.
   *
   * @var \\Drupal\\webform\\WebformSubmissionStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8976a91ecf5eafb2efffcce497b906fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission (server-side) conditions (#states) validator.
   *
   * @var \\Drupal\\webform\\WebformSubmissionConditionsValidator
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6228171bf001a8f378c80adc55cca5c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb6294e4b2f0f2855d615667230fe14f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * IMPORTANT:
   * Webform handlers are initialized and serialized when they are attached to a
   * webform. Make sure not include any services as a dependency injection
   * that directly connect to the database. This will prevent
   * "LogicException: The database connection is not serializable." exceptions
   * from being thrown when a form is serialized via an Ajax callback and/or
   * form build.
   *
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df6feba847b96517170d19fb97f78217' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cfe73a6e25ec73df845f6569eb4fb49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c9537b149084e7ff03d7bbd0def57bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'description',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '925780f3feb3c7edff5a2b1ac70b547a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'cardinality',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c92d2d8309e55969432da53e9a59014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'supportsConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffc46c507dddf315e7d53ff0d7a8ac0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'supportsTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3178deebeef88bd341813ffac312bee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getHandlerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4884092232da60a071a078ab2d133a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setHandlerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3cbd50464907242d7925dc15244587e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1ad7c7f01cf095a600114ebd8eee754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56382df44f826acedc831666a31e6ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c5df79cec3fec8ae1742fb6c7cb8cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bbb7ae72e084d84a2ce1c88704051cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d5ace78fdb929a99630e8f61aa6e0d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41a1811046e6c3f3a6feb696d6eb67d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7847377a62ea45277ed95b61d847e823' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f1fbab324322ee4ca60f3de5a668d7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'enable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cf6f19e53fe3ca91256266290d4d033' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'disable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42ea8668218c0eeff77d077de3ff76bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'isExcluded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3ae806eb64f6f7592bde54360065f5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'isEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14977cb6d4c1dd514b4dc7a11966831d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'isDisabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '067f038a86ac6922b569b59f375d284b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'isApplicable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd872264f45a012a9ad36c81996898243' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'isSubmissionOptional',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b082abb5993df3bea9cfc85f68b9e27f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'isSubmissionRequired',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5c24909ca2915756734971fdca8a814' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'hasAnonymousSubmissionTracking',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffc827fea4e41115570afb91a145b36b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'checkConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10fcf4231ed94c82a45364c84021a33e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12411b509753762279eb2adf4671bfc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c96157030e486537cbe8b32089a59f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6f5d6532acf5d900fbcbc5fa622eff6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a486847af5bde382e2b7ba8d813dc55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9104bc9cb19e0181f593b5bb9b5540f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a999cec076131b97d8d74d054d6515cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Apply submitted form state to configuration.
   *
   * This method can used to update configuration when the configuration form
   * is being rebuilt during an #ajax callback.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'applyFormStateToConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4abe059d5c0c9fd6577cea9892c5d44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'alterElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'adab80d2b3e9dbb57cdc284c1ff90e3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'alterElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9addd642e4e5a0bbc8f1135d5aed483' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'overrideSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f38e82fdd78656a7cd2f2989ac0d1590' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'alterForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d2f651df5363647a93f85c9e3807862' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36830433aa03ffb6792e052c5cf43620' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b41785b56190d5d53bda1a3db62faf67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'confirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a49e5f1cb29f2c89e2056ea5f8e4a908' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9477ac551f5ad0f2ed30fc1ea849f4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'postCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36419432d56a20b8a78def6daaca4d59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'postLoad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fcea0485f44c04ed334fc54204a05c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a0ad19ae385a659396e000b202786dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bf743986867ea173367e9e9af3c1e76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e34fef8b5323d91544d2c3b23982ae14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfb8c1437d03a4e5ea4534a718bf3969' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'access',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cadc961e378480e0ad3aaa6e41eaf9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'preprocessConfirmation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00a727d8f009006ced754e36eb3a2676' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'createHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b651161dfad4af7419367058d9e826bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'updateHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27f4a9f3ec39cf4991b63f8453de427e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'deleteHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43b5ce5b054bb18def12aa6fdee521af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'accessElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '505ea6a45b1fe3ed297f17fb1c5ab736' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'createElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bc4b21129005fc04414b7c95ea366a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'updateElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e367e01b2603749e5bf407bd35c4c95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'deleteElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ad1059b825aab4fb56fc073e9799f64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set configuration settings parents.
   *
   * This helper method looks looks for the handler default configuration keys
   * within a form and set a matching element\'s #parents property to
   * [\'settings\', \'{element_key}\']
   *
   * @param array $elements
   *   An array of form elements.
   *
   * @return array
   *   Form element with #parents set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setSettingsParents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '020e512b123bebeabaf3ca3f43fb71cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set configuration settings parents.
   *
   * This helper method looks looks for the handler default configuration keys
   * within a form and set a matching element\'s #parents property to
   * [\'settings\', \'{element_key}\']
   *
   * @param array $elements
   *   An array of form elements.
   *
   * @return array
   *   Form element with #parents set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'setSettingsParentsRecursively',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a042d47b214863b64ac5f53f4a73972' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace tokens in text with no render context.
   *
   * @param string|array $text
   *   A string of text that may contain tokens.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   A Webform or Webform submission entity.
   * @param array $data
   *   (optional) An array of keyed objects.
   * @param array $options
   *   (optional) A keyed array of settings and flags to control the token
   *   replacement process. Supported options are:
   *   - langcode: A language code to be used when generating locale-sensitive
   *     tokens.
   *   - callback: A callback function that will be used to post-process the
   *     array of token replacements after they are generated.
   *   - clear: A boolean flag indicating that tokens should be removed from the
   *     final text if no replacement value can be generated.
   *
   * @return string|array
   *   Text or array with tokens replaced.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'replaceTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '141b8fccb02601bd9f0d83e7e49e5e11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build token tree element.
   *
   * @param array $token_types
   *   (optional) An array containing token types that should be shown in the tree.
   * @param string $description
   *   (optional) Description to appear after the token tree link.
   *
   * @return array
   *   A render array containing a token tree link wrapped in a div.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'buildTokenTreeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcafbeb9c2fe638851cab50650eeb94d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate form that should have tokens in it.
   *
   * @param array $form
   *   A form.
   * @param array $token_types
   *   An array containing token types that should be validated.
   *
   * @see token_element_validate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'elementTokenValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7afbd201d1d3ff8ff4f6bad7d1fc05a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform or webform_submission logger.
   *
   * @param string $channel
   *   The logger channel. Defaults to \'webform\'.
   *
   * @return \\Drupal\\Core\\Logger\\LoggerChannelInterface
   *   Webform logger
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
         'functionName' => 'getLogger',
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