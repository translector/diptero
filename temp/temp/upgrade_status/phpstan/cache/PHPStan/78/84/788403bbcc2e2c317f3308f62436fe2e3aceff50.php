<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/hal/src/Normalizer/EntityReferenceItemNormalizer.php-1594234425,/var/www/html/web/core/modules/serialization/src/Normalizer/EntityReferenceFieldItemNormalizerTrait.php-1594234425',
   'data' => 
  array (
    '2bbc433ddfd0a8d49b5c3850d9fcbf94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts the Drupal entity reference item object to HAL array structure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14388fa26930654fad28bfb3b0990ab9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts empty reference values for entity reference items.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e26810cd3e17eee4e1fb128965ee17b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a field item references a taxonomy term.
   *
   * @param \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem $field_item
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'fieldItemReferencesTaxonomyTerm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '134e417a2b3417b5ecff3d781f6f3ee1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1c9b5e8c731241b7cf19e74f13a797c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The hypermedia link manager.
   *
   * @var \\Drupal\\hal\\LinkManager\\LinkManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27e06605429441f369438aab416166f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity resolver.
   *
   * @var \\Drupal\\serialization\\EntityResolver\\EntityResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21b6332d97b90248cf436e4da63c0b32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'faf197bd0a07d9bc70ab729ecca20965' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an EntityReferenceItemNormalizer object.
   *
   * @param \\Drupal\\hal\\LinkManager\\LinkManagerInterface $link_manager
   *   The hypermedia link manager.
   * @param \\Drupal\\serialization\\EntityResolver\\EntityResolverInterface $entity_Resolver
   *   The entity resolver.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface|null $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b0e4e1181fdba5b9598973c0a0ca397' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'normalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f30fc32f997b8c790dfc91dbd235dec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var $field_item \\Drupal\\Core\\Field\\FieldItemInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'normalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd501af49a3acb02904feec9eb3731e8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the referenced entity is of a fieldable entity type.
   *
   * @param \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem $item
   *   The reference field item whose target entity needs to be checked.
   *
   * @return bool
   *   TRUE when the referenced entity is of a fieldable entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'targetEntityIsFieldable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cbfa34f450dbd400a89f879e1c6a4fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'constructValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '322ee0d2fce33e16f1fdebee2074810a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'normalizedFieldValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06d0263f9136c37222eb478a5eb1ace4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'linkmanagerinterface' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
          'entityresolverinterface' => 'Drupal\\serialization\\EntityResolver\\EntityResolverInterface',
          'uuidreferenceinterface' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
          'entityreferencefielditemnormalizertrait' => 'Drupal\\serialization\\Normalizer\\EntityReferenceFieldItemNormalizerTrait',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\EntityReferenceItemNormalizer',
         'functionName' => 'getUuid',
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