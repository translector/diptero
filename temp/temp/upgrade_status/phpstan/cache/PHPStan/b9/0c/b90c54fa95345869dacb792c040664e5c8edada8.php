<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Table.php-1594234425',
   'data' => 
  array (
    '4424d92deb3460bf3a498c89232b888f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element for a table.
 *
 * Note: Although this extends FormElement, it can be used outside the
 * context of a form.
 *
 * Properties:
 * - #header: An array of table header labels.
 * - #rows: An array of the rows to be displayed. Each row is either an array
 *   of cell contents or an array of properties as described in table.html.twig
 *   Alternatively specify the data for the table as child elements of the table
 *   element. Table elements would contain rows elements that would in turn
 *   contain column elements.
 * - #empty: Text to display when no rows are present.
 * - #responsive: Indicates whether to add the drupal.responsive_table library
 *   providing responsive tables.  Defaults to TRUE.
 * - #sticky: Indicates whether to add the drupal.tableheader library that makes
 *   table headers always visible at the top of the page. Defaults to FALSE.
 *
 * Usage example:
 * @code
 * $form[\'contacts\'] = array(
 *   \'#type\' => \'table\',
 *   \'#caption\' => $this->t(\'Sample Table\'),
 *   \'#header\' => array($this->t(\'Name\'), $this->t(\'Phone\')),
 * );
 *
 * for ($i = 1; $i <= 4; $i++) {
 *   $form[\'contacts\'][$i][\'#attributes\'] = array(\'class\' => array(\'foo\', \'baz\'));
 *   $form[\'contacts\'][$i][\'name\'] = array(
 *     \'#type\' => \'textfield\',
 *     \'#title\' => $this->t(\'Name\'),
 *     \'#title_display\' => \'invisible\',
 *   );
 *
 *   $form[\'contacts\'][$i][\'phone\'] = array(
 *     \'#type\' => \'tel\',
 *     \'#title\' => $this->t(\'Phone\'),
 *     \'#title_display\' => \'invisible\',
 *   );
 * }
 *
 * $form[\'contacts\'][][\'colspan_example\'] = array(
 *   \'#plain_text\' => \'Colspan Example\',
 *   \'#wrapper_attributes\' => array(\'colspan\' => 2, \'class\' => array(\'foo\', \'bar\')),
 * );
 * @endcode
 * @see \\Drupal\\Core\\Render\\Element\\Tableselect
 *
 * @FormElement("table")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Table',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8c95dc9d50140be9f315618cefb9170' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Table',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1966e42e6855a9a3b25c21f8f518af6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Table',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd19989b7f41df5443d1db84c8a08443a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #process callback for #type \'table\' to add tableselect support.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   table element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Table',
         'functionName' => 'processTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bea58c0a0e57d4ef314286fdec0cb0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #element_validate callback for #type \'table\'.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   table element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Table',
         'functionName' => 'validateTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc24b8564385ef52b63405bcadfc0bb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #pre_render callback to transform children of an element of #type \'table\'.
   *
   * This function converts sub-elements of an element of #type \'table\' to be
   * suitable for table.html.twig:
   * - The first level of sub-elements are table rows. Only the #attributes
   *   property is taken into account.
   * - The second level of sub-elements is converted into columns for the
   *   corresponding first-level table row.
   *
   * Simple example usage:
   * @code
   * $form[\'table\'] = array(
   *   \'#type\' => \'table\',
   *   \'#header\' => array($this->t(\'Title\'), array(\'data\' => $this->t(\'Operations\'), \'colspan\' => \'1\')),
   *   // Optionally, to add tableDrag support:
   *   \'#tabledrag\' => array(
   *     array(
   *       \'action\' => \'order\',
   *       \'relationship\' => \'sibling\',
   *       \'group\' => \'thing-weight\',
   *     ),
   *   ),
   * );
   * foreach ($things as $row => $thing) {
   *   $form[\'table\'][$row][\'#weight\'] = $thing[\'weight\'];
   *
   *   $form[\'table\'][$row][\'title\'] = array(
   *     \'#type\' => \'textfield\',
   *     \'#default_value\' => $thing[\'title\'],
   *   );
   *
   *   // Optionally, to add tableDrag support:
   *   $form[\'table\'][$row][\'#attributes\'][\'class\'][] = \'draggable\';
   *   $form[\'table\'][$row][\'weight\'] = array(
   *     \'#type\' => \'textfield\',
   *     \'#title\' => $this->t(\'Weight for @title\', array(\'@title\' => $thing[\'title\'])),
   *     \'#title_display\' => \'invisible\',
   *     \'#size\' => 4,
   *     \'#default_value\' => $thing[\'weight\'],
   *     \'#attributes\' => array(\'class\' => array(\'thing-weight\')),
   *   );
   *
   *   // The amount of link columns should be identical to the \'colspan\'
   *   // attribute in #header above.
   *   $form[\'table\'][$row][\'edit\'] = array(
   *     \'#type\' => \'link\',
   *     \'#title\' => $this->t(\'Edit\'),
   *     \'#url\' => Url::fromRoute(\'entity.test_entity.edit_form\', [\'test_entity\' => $row]),
   *   );
   * }
   * @endcode
   *
   * @param array $element
   *   A structured array containing two sub-levels of elements. Properties used:
   *   - #tabledrag: The value is a list of $options arrays that are passed to
   *     drupal_attach_tabledrag(). The HTML ID of the table is added to each
   *     $options array.
   *
   * @return array
   *
   * @see template_preprocess_table()
   * @see \\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface::processAttachments()
   * @see drupal_attach_tabledrag()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Table',
         'functionName' => 'preRenderTable',
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