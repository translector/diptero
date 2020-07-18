<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Ajax/OpenModalDialogCommand.php-1594234425',
   'data' => 
  array (
    'cd22ea0ee9fd55bd8e1ff39e08899f49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an AJAX command to open certain content in a dialog in a modal dialog.
 *
 * @ingroup ajax
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75a2434f72146f69c4e7aac09fd772be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an OpenModalDialog object.
   *
   * The modal dialog differs from the normal modal provided by
   * OpenDialogCommand in that a modal prevents other interactions on the page
   * until the modal has been completed. Drupal provides a built-in modal for
   * this purpose, so no selector needs to be provided.
   *
   * @param string $title
   *   The title of the dialog.
   * @param string|array $content
   *   The content that will be placed in the dialog, either a render array
   *   or an HTML string.
   * @param array $dialog_options
   *   (optional) Settings to be passed to the dialog implementation. Any
   *   jQuery UI option can be used. See http://api.jqueryui.com/dialog.
   * @param array|null $settings
   *   (optional) Custom settings that will be passed to the Drupal behaviors
   *   on the content of the dialog. If left empty, the settings will be
   *   populated automatically from the current request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
         'functionName' => '__construct',
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