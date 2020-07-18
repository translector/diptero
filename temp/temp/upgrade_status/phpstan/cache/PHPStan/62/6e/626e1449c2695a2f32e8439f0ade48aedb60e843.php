<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Utility/TableSort.php-1594234425',
   'data' => 
  array (
    'a53f0fe7cfb03fc31db13bd0ac66ea3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a class for table sorting processing and rendering.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'link' => 'Drupal\\Core\\Link',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Utility\\TableSort',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3bf5205814bde2a83745060b0c47ef1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the table sort context.
   *
   * @param array $headers
   *   An array of column headers in the format described in \'#type\' => \'table\'.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   A current request.
   *
   * @return array
   *   The current table sort context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'link' => 'Drupal\\Core\\Link',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Utility\\TableSort',
         'functionName' => 'getContextFromRequest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'add2735d5fce3a574c87f4b0e7f54f52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a column header.
   *
   * If the cell in question is the column header for the current sort
   * criterion, it gets special formatting. All possible sort criteria become
   * links.
   *
   * @param string $cell_content
   *   The cell content to format. Passed by reference.
   * @param array $cell_attributes
   *   The cell attributes. Passed by reference.
   * @param array $header
   *   An array of column headers in the format described in \'#type\' => \'table\'.
   * @param array $context
   *   The current table sort context as returned from
   *   TableSort::getContextFromRequest() method.
   *
   * @throws \\Exception
   *
   * @see getContextFromRequest()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'link' => 'Drupal\\Core\\Link',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Utility\\TableSort',
         'functionName' => 'header',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92cc54fee839b61e0fbc8ad8de4cd09d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the current sort criterion.
   *
   * @param array $headers
   *   An array of column headers in the format described in \'#type\' => \'table\'.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   A current request.
   *
   * @return array
   *   An associative array describing the criterion, containing the keys:
   *   - "name": The localized title of the table column.
   *   - "sql": The name of the database field to sort on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'link' => 'Drupal\\Core\\Link',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Utility\\TableSort',
         'functionName' => 'getOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd815a683c5efb7bf03b338d74e1c75a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the current sort direction.
   *
   * @param array $headers
   *   An array of column headers in the format described in \'#type\' => \'table\'.
   * @param \\Symfony\\Component\\HttpFoundation\\Request|null $request
   *   A current request.
   *
   * @return string
   *   The current sort direction ("asc" or "desc").
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'link' => 'Drupal\\Core\\Link',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Utility\\TableSort',
         'functionName' => 'getSort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30f7ab8b1c51746a6eae4dd45237fb6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Composes a URL query parameter array for table sorting links.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request|null $request
   *   A current request.
   *
   * @return array
   *   A URL query parameter array that consists of all components of the
   *   current page request except for those pertaining to table sorting.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'link' => 'Drupal\\Core\\Link',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Utility\\TableSort',
         'functionName' => 'getQueryParameters',
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