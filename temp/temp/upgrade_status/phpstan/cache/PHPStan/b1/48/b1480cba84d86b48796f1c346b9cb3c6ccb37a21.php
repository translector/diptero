<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/EventSubscriber/ReplicateFieldSubscriber.php-1590060906',
   'data' => 
  array (
    '3b305a794424c583d208bcd269936cba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Event subscriber that handles cloning through the Replicate module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\EventSubscriber',
         'uses' => 
        array (
          'replicateentityfieldevent' => 'Drupal\\replicate\\Events\\ReplicateEntityFieldEvent',
          'replicatorevents' => 'Drupal\\replicate\\Events\\ReplicatorEvents',
          'replicator' => 'Drupal\\replicate\\Replicator',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\paragraphs\\EventSubscriber\\ReplicateFieldSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de070e12f477557ea22066d17e8727b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The replicator service.
   *
   * @var \\Drupal\\replicate\\Replicator
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\EventSubscriber',
         'uses' => 
        array (
          'replicateentityfieldevent' => 'Drupal\\replicate\\Events\\ReplicateEntityFieldEvent',
          'replicatorevents' => 'Drupal\\replicate\\Events\\ReplicatorEvents',
          'replicator' => 'Drupal\\replicate\\Replicator',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\paragraphs\\EventSubscriber\\ReplicateFieldSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9df7a0a95fc0738c1a5d0844661cb319' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * ReplicateFieldSubscriber constructor.
   *
   * @param \\Drupal\\replicate\\Replicator $replicator
   *   The replicator service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\EventSubscriber',
         'uses' => 
        array (
          'replicateentityfieldevent' => 'Drupal\\replicate\\Events\\ReplicateEntityFieldEvent',
          'replicatorevents' => 'Drupal\\replicate\\Events\\ReplicatorEvents',
          'replicator' => 'Drupal\\replicate\\Replicator',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\paragraphs\\EventSubscriber\\ReplicateFieldSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '855927053a11aff0da06be335d92a114' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replicates paragraphs when the parent entity is being replicated.
   *
   * @param \\Drupal\\replicate\\Events\\ReplicateEntityFieldEvent $event
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\EventSubscriber',
         'uses' => 
        array (
          'replicateentityfieldevent' => 'Drupal\\replicate\\Events\\ReplicateEntityFieldEvent',
          'replicatorevents' => 'Drupal\\replicate\\Events\\ReplicatorEvents',
          'replicator' => 'Drupal\\replicate\\Replicator',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\paragraphs\\EventSubscriber\\ReplicateFieldSubscriber',
         'functionName' => 'onClone',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '628f6fffdd17b213b1e386e274b54ee3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\EventSubscriber',
         'uses' => 
        array (
          'replicateentityfieldevent' => 'Drupal\\replicate\\Events\\ReplicateEntityFieldEvent',
          'replicatorevents' => 'Drupal\\replicate\\Events\\ReplicatorEvents',
          'replicator' => 'Drupal\\replicate\\Replicator',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\paragraphs\\EventSubscriber\\ReplicateFieldSubscriber',
         'functionName' => 'getSubscribedEvents',
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