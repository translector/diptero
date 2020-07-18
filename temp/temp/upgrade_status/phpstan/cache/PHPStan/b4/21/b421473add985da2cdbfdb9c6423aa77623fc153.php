<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/Plugin/Linkit/Matcher/EntityMatcher.php-1586214306,/var/www/html/web/modules/contrib/linkit/src/MatcherTokensTrait.php-1586214306',
   'data' => 
  array (
    'e06383482c528a672ed95894f678d111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides default linkit matchers for all entity types.
 *
 * @Matcher(
 *   id = "entity",
 *   label = @Translation("Entity"),
 *   deriver = "\\Drupal\\linkit\\Plugin\\Derivative\\EntityMatcherDeriver"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ccb9f6ff6291a7221440d6df94d5d93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides friendly methods for matchers using tokens.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91a05fe174579e76cdd70d18cf242a28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inserts a form element with a list of available tokens.
   *
   * @param array $form
   *   The form array to append the token list to.
   * @param array $types
   *   An array of token types to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'insertTokenList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aaa68aab1c004dc6d6d3adc09f4b197' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all available tokens.
   *
   * @param array $types
   *   An array of token types to use.
   *
   * @return array
   *   An array with available tokens
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'getAvailableTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55145dbc2d251598c66e330e90fa64fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default limit for matches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3275cb7f0976682170f51363610633d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07cf21c64a114f0ad15b0246106a3826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb8b2f047f4150c1b7c84450789f443c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type bundle info.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '654dadbe363e6733ca95b8eecd4c0e9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9417729acec386663cd7de34fc4a4d2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e62777de3b089146f5476c2468ebc02f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '398a365ad86a5e953719c30abb4808c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The target entity type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '154975763e829a1ab649b4174d892bac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The substitution manager.
   *
   * @var \\Drupal\\linkit\\SubstitutionManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '005fe90e7099ec6a779662da22b0fd46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e915e94b64d53b0f09de224feb37304' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30c26c1332f9b654d9523da191805f47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bf32a5e5555f8da25aa2abd10892971' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12327643cc03b1dd9142e85dd83213b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '748edcd42c9916b390196010fad23512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '589313ab00e0ea433d30567456dd3e4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '759dee983d3b2e525d31ef921fb656f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form element validation handler; Filters the #value property of an element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'elementValidateFilter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7e301bf48830631d4aed866551134ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'execute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '249e08f069f8a806c51c7182b0f08db4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessResultInterface $access */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'execute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c24ef396e2c1cb19d733a13bf89fc86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an EntityQuery to get entities.
   *
   * @param string $search_string
   *   Text to match the label against.
   *
   * @return \\Drupal\\Core\\Entity\\Query\\QueryInterface
   *   The EntityQuery object with the basic conditions and sorting applied to
   *   it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'buildEntityQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1069700f8d750561baab7a0621d4f07a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds query tags to the query.
   *
   * @param \\Drupal\\Core\\Entity\\Query\\QueryInterface $query
   *   A query to add tags to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'addQueryTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89a1e8ae3dbced0216e9c9e74cc8cca2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a suggestion.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The matched entity.
   *
   * @return \\Drupal\\linkit\\Suggestion\\EntitySuggestion
   *   A suggestion object with populated entity data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'createSuggestion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6506e3798ce7391d3582b5794364741' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the label string used in the suggestion.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The matched entity.
   *
   * @return string
   *   The label for this entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'buildLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8eab108f12721a72d4db98e7f89d0542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the metadata string used in the suggestion.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The matched entity.
   *
   * @return string
   *   The metadata for this entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'buildDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12e10c883eec28b22e4011a2c830fa69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the group string used in the suggestion.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The matched entity.
   *
   * @return string
   *   The match group for this entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'buildGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92cebf3d5a361415d796a2a2b9cce16f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the path string used in the suggestion.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The matched entity.
   *
   * @return string
   *   The path for this entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'buildPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ba5a29bef7b2e0a50a13ff771c75bd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds entity id from the given input.
   *
   * @param string $user_input
   *   The string to url parse.
   *
   * @return array
   *   An array with an entity id if the input can be parsed as an internal url
   *   and a match is found, otherwise an empty array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configentitytypeinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'configurablematcherbase' => 'Drupal\\linkit\\ConfigurableMatcherBase',
          'matchertokenstrait' => 'Drupal\\linkit\\MatcherTokensTrait',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'entitysuggestion' => 'Drupal\\linkit\\Suggestion\\EntitySuggestion',
          'suggestioncollection' => 'Drupal\\linkit\\Suggestion\\SuggestionCollection',
          'linkitxss' => 'Drupal\\linkit\\Utility\\LinkitXss',
          'exception' => 'Exception',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Linkit\\Matcher\\EntityMatcher',
         'functionName' => 'findEntityIdByUrl',
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