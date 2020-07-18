<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Twig/WebformTwigExtension.php-1594241402',
   'data' => 
  array (
    '2c7b9b1b7ab323ca9a8b118502ccfe07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Twig extension with some useful functions and filters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9af5d4601f5106e1e5c7f9891ce64b40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'getFunctions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afd4adcc9719cac83b3909397e69aecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdd2fc4fce04b01f21fd850030107e3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Debug data by outputting YAML.
   *
   * @param mixed $data
   *   Data to be outputted.
   *
   * @return string
   *   Data serialized to YAML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'webformDebug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acc1182d11c201ba834c099f38260a7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace tokens in text.
   *
   * @param string|array $token
   *   A string of text that may contain tokens.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   A Webform or Webform submission entity.
   * @param array $data
   *   (optional) An array of keyed objects.
   * @param array $options
   *   (optional) A keyed array of settings and flags to control the token
   *   replacement process.
   *
   * @return string|array
   *   Text or array with tokens replaced.
   *
   * @see \\Drupal\\Core\\Utility\\Token::replace
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'webformToken',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70d965946779a1526d0e54b738284748' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformTokenManagerInterface $token_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'webformToken',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8efb4f2e2a1a820f5a9bfdd1461e350' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build reusable Twig help.
   *
   * @param array $variables
   *   An array of available variable names.
   *
   * @return array
   *   A renderable array container Twig help.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'buildTwigHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3488526aaef49f321dc1f9f679ebf3d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionStorageInterface $submission_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'buildTwigHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d91f3f679b635f75ba1f38371fbb1f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render a Twig template with a webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param string $template
   *   A inline Twig template.
   * @param array $options
   *   (optional) Template and token options.
   * @param array $context
   *   (optional) Context to be passed to inline Twig template.
   *
   * @return string
   *   The fully rendered Twig template.
   *
   * @see \\Drupal\\webform\\Element\\WebformComputedTwig::computeValue
   * @see \\Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler::getMessage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'renderTwigTemplate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aba273886dcdfb1cfcc703af4f368088' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a Twig template with a webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param string $template
   *   A inline Twig template.
   * @param array $options
   *   (optional) Template, token options, and context.
   * @param array $context
   *   (optional) Context to be passed to inline Twig template.
   *
   * @return array
   *   A renderable containing an inline twig template.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'buildTwigTemplate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a86ea55957f0f517dc76c7708f35c165' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the current user can edit Twig templates.
   *
   * @return bool
   *   TRUE if the current user can edit Twig templates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Twig',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformlogichelper' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
         'functionName' => 'hasEditTwigAccess',
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