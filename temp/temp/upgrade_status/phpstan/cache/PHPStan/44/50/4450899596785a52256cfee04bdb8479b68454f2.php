<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_scheduled_email/src/Controller/WebformScheduledEmailController.php-1594690523',
   'data' => 
  array (
    '8c9f3f33d38239f1aa955c7763f4242d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides route responses for webform scheduled email.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Controller\\WebformScheduledEmailController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3430157090147ebf953973ddb3a47fc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform scheduled email manager.
   *
   * @var \\Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Controller\\WebformScheduledEmailController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e3a7645aa4da538cdd7a8a8a2fcf582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Controller\\WebformScheduledEmailController',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff3cf5c6b4ee7e1afbe231314947e127' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs cron task for webform scheduled email handler.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   The webform containing a scheduled email handler.
   * @param string|null $handler_id
   *   A webform handler id.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
   *   A redirection to the webform handlers page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Controller\\WebformScheduledEmailController',
         'functionName' => 'cron',
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