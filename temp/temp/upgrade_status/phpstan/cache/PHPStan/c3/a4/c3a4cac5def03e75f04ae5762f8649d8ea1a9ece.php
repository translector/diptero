<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Element/NodeElement.php-1588622691',
   'data' => 
  array (
    '4d7d78d5a6fd71fe8877757cd066c068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Page element node.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e06a7d289733a18963e7f6fd4f4a3be4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes node element.
     *
     * @param string  $xpath   element xpath
     * @param Session $session session instance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51c85cb77121ec1b087dec3fdb44bcf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns XPath for handled element.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'getXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83795d1bc36c71a09b9ca4e4a072478c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns parent element to the current one.
     *
     * @return NodeElement
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'getParent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e60c571b1c95beb45363a02c16dc027' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns current node tag name.
     *
     * The value is always returned in lowercase to allow an easy comparison.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'getTagName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45adca314f99d25f0abbfaf0bff419c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value of the form field or option element.
     *
     * For checkbox fields, the value is a boolean indicating whether the checkbox is checked.
     * For radio buttons, the value is the value of the selected button in the radio group
     *      or null if no button is selected.
     * For single select boxes, the value is the value of the selected option.
     * For multiple select boxes, the value is an array of selected option values.
     * for file inputs, the return value is undefined given that browsers don\'t allow accessing
     *      the value of file inputs for security reasons. Some drivers may allow accessing the
     *      path of the file set in the field, but this is not required if it cannot be implemented.
     * For textarea elements and all textual fields, the value is the content of the field.
     * Form option elements, the value is the value of the option (the value attribute or the text
     *      content if the attribute is not set).
     *
     * Calling this method on other elements than form fields or option elements is not allowed.
     *
     * @return string|bool|array|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '396e2e0fc88635ba6516aa8c65e7dda8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the value of the form field.
     *
     * Calling this method on other elements than form fields is not allowed.
     *
     * @param string|bool|array $value
     *
     * @see NodeElement::getValue for the format of the value for each type of field
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'setValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c578127dfdf31884a9e8437fdd7f08c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether element has attribute with specified name.
     *
     * @param string $name
     *
     * @return boolean
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'hasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdbf122ea7b9d80386b65f25f5dca49f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns specified attribute value.
     *
     * @param string $name
     *
     * @return string|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'getAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d83099132f37823bcb68bacf5e1547f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether an element has a named CSS class.
     *
     * @param string $className Name of the class
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'hasClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f72c2a74a3b91a565b5a0eb111a5ad4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clicks current node.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'click',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3162e4920ed9486be82b5b988bc12f2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Presses current button.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'press',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bf91a4ed57fdb14c8d3dd4123dd80e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Double-clicks current node.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'doubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25769dd45a6e3ed4dbdb42383feb92ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Right-clicks current node.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'rightClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5df89a5afafff2a527a9f7e5da2f7e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks current node if it\'s a checkbox field.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'check',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb9c7ef839cee1ae8994bb417a3b674a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Unchecks current node if it\'s a checkbox field.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'uncheck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a865058e5303e0b63906ac422ed8fad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether current node is checked if it\'s a checkbox or radio field.
     *
     * Calling this method on any other elements is not allowed.
     *
     * @return boolean
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'isChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb814c9262f5257d199ff06298baf386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Selects specified option for select field or specified radio button in the group.
     *
     * If the current node is a select box, this selects the option found by its value or
     * its text.
     * If the current node is a radio button, this selects the radio button with the given
     * value in the radio button group of the current node.
     *
     * Calling this method on any other elements is not allowed.
     *
     * @param string  $option
     * @param boolean $multiple whether the option should be added to the selection for multiple selects
     *
     * @throws ElementNotFoundException when the option is not found in the select box
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'selectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ee1242dc3ce50a670e14c2b7f319b3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether current node is selected if it\'s a option field.
     *
     * Calling this method on any other elements is not allowed.
     *
     * @return boolean
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'isSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9671429955add12105624d0f954c4615' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Attach file to current node if it\'s a file input.
     *
     * Calling this method on any other elements than file input is not allowed.
     *
     * @param string $path path to file (local)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'attachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00a785951d10496af8c3a847bafdba95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether current node is visible on page.
     *
     * @return boolean
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'isVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26216c742e5f4d0f7dc4be2076fc3a51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Simulates a mouse over on the element.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'mouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f637e7ff8a9dd34b5b82c79907a1b2b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Drags current node onto other node.
     *
     * @param ElementInterface $destination other node
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'dragTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0456e0277b3898cc8d6778d67b979300' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Brings focus to element.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'focus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f043c3d706b039947a1380c3b80cb148' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes focus from element.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'blur',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bb8fd1f7517a1b0d83ef6b68d393b6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Presses specific keyboard key.
     *
     * @param string|int $char     could be either char (\'b\') or char-code (98)
     * @param string     $modifier keyboard modifier (could be \'ctrl\', \'alt\', \'shift\' or \'meta\')
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'keyPress',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d8b24528777759d081d782486fbc140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Pressed down specific keyboard key.
     *
     * @param string|int $char     could be either char (\'b\') or char-code (98)
     * @param string     $modifier keyboard modifier (could be \'ctrl\', \'alt\', \'shift\' or \'meta\')
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'keyDown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7338f7999212bac458bef8c3d780474' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Pressed up specific keyboard key.
     *
     * @param string|int $char     could be either char (\'b\') or char-code (98)
     * @param string     $modifier keyboard modifier (could be \'ctrl\', \'alt\', \'shift\' or \'meta\')
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'keyUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abdd96cb5caaeb2c818a5e072438b4cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Submits the form.
     *
     * Calling this method on anything else than form elements is not allowed.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
        ),
         'className' => 'Behat\\Mink\\Element\\NodeElement',
         'functionName' => 'submit',
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