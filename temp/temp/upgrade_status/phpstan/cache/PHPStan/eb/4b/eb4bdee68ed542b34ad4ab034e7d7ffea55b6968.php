<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Element/EntityBrowserPagerElement.php-1588013888',
   'data' => 
  array (
    'd5c457b57751de6f124c398e68fc14ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an Entity Browser pager form element.
 *
 * Properties:
 * - #total_pages: Total number of pages. This is optional with default
 *   value set on NULL. With default value pager can\'t calculate last page
 *   correctly and "next" will be available even on last page. For
 *   correct functionality #total_pages must be set up.
 *
 * Example:
 * @code
 *   $form[\'pager\'] = [
 *     \'#type\' => \'entity_browser_pager\',
 *     \'#total_pages\' => 12,
 *   ];
 * @endcode
 *
 * Number of the current page is stored in the form state. In order to get it
 * the provided helper function needs to be utilized:
 *
 * @code
 *   $page = EntityBrowserPagerElement::getCurrentPage($form_state);
 * @endcode
 *
 * @see ::getCurrentPage($form_state).
 *
 * @FormElement("entity_browser_pager")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserPagerElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e508a42d4556590c687378fdca31b2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserPagerElement',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d7aad339c0852a7c3ece3c9a8eaaabc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process Entity browser pager element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserPagerElement',
         'functionName' => 'processEntityBrowserPager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b19de3c084508ea98b661dea40c801a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit handler for next and previous buttons.
   *
   * @param array $form
   *   The form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserPagerElement',
         'functionName' => 'submitPager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb6e568177d6e4bee6e6c188a8068af6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets current page from the form state.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state.
   *
   * @return int
   *   Current page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserPagerElement',
         'functionName' => 'getCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e940868d71378038e996ed619403401' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets current page.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state.
   * @param int $page
   *   (Optional) Page to set as current. Pager will be reset to the first page
   *   if omitted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserPagerElement',
         'functionName' => 'setCurrentPage',
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