<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Ajax/AnnounceCommand.php-1594234425',
   'data' => 
  array (
    '9998eacf58e2168ee2818ac141239208' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * AJAX command for a JavaScript Drupal.announce() call.
 *
 * Developers should be extra careful if this command and
 * \\Drupal\\Core\\Ajax\\MessageCommand are included in the same response. By
 * default, MessageCommmand will also call Drupal.announce() and announce the
 * message to the screen reader (unless the option to suppress announcements is
 * passed to the constructor). Manual testing with a screen reader is strongly
 * recommended.
 *
 * @see \\Drupal\\Core\\Ajax\\MessageCommand
 *
 * @ingroup ajax
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8adf433c0f455e12e5551d8a5b51b32a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The assertive priority attribute value.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff00c4054237dfd777a200a35ca5e8ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The polite priority attribute value.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ec4ad00f6b3a8fc74dac74173decba8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The text to be announced.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '766355516c7a90fe20cfe2aea0f80739' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The priority that will be used for the announcement.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7605949401c662bfc8b2ab15314bf134' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an AnnounceCommand object.
   *
   * @param string $text
   *   The text to be announced.
   * @param string|null $priority
   *   (optional) The priority that will be used for the announcement. Defaults
   *   to NULL which will not set a \'priority\' in the response sent to the
   *   client and therefore the JavaScript Drupal.announce() default of \'polite\'
   *   will be used for the message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b815d86669c9e20e71d0fd48bcc66781' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '630fea8ee5427a683cc4c4d310c325e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'attachedassets' => 'Drupal\\Core\\Asset\\AttachedAssets',
        ),
         'className' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
         'functionName' => 'getAttachedAssets',
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