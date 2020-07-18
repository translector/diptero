<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformHelpManagerInterface.php-1594690523',
   'data' => 
  array (
    '2fc2934fff41447ccb72766441d4bd0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for help classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c5fea82c77f8c83cbac4c11ab7fc2c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get group.
   *
   * @param string|null $id
   *   (optional) Group name.
   *
   * @return array|mixed
   *   A single group item or all groups.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'getGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41ca16e916fb4904630828e74cafe65e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get help.
   *
   * @param string|null $id
   *   (optional) Help id.
   *
   * @return array|mixed
   *   A single help item or all help.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'getHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07bf05981dd10a9fc2087e62d0d6ef2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get video.
   *
   * @param string|null $id
   *   (optional) Video id.
   *
   * @return array|mixed
   *   A single help item or all videos.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'getVideo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd5236e95774f6abde95418df556214e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get video links.
   *
   * @param string $id
   *   Video id.
   *
   * @return array
   *   An array of links.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'getVideoLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abd627553d5afb618c4bc2288d5a3033' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a notification to be displayed to webform administrators.
   *
   * @param string $id
   *   The notification id.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface|array $message
   *   The notification to be displayed to webform administrators.
   * @param string $type
   *   (optional) The message\'s type. Defaults to \'status\'. These values are
   *   supported: \'info\', \'status\', \'warning\', \'error\'.
   *
   * @internal
   *   Currently being used to display notifications related to updates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'addNotification',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'addc6459c5e4de6fb222f4184fb2701c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get notifications.
   *
   * @param string $type
   *   (optional) The message\'s type. These values are
   *   supported: \'info\', \'status\', \'warning\', \'error\'.
   *
   * @return array
   *   An array of messages for specified message type or
   *   all notifications grouped by type.
   *
   * @internal
   *   Currently being used to display notifications related to updates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'getNotifications',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd14bfe8d2901df584333bd0dd55dc78b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delete a notification by id.
   *
   * @param string $id
   *   The notification id.
   *
   * @internal
   *   Currently being used to display notifications related to updates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'deleteNotification',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4889c0d7484fa020a1af78fec6ead5cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build help for specific route.
   *
   * @param string $route_name
   *   The route for which to find help.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match object from which to find help.
   *
   * @return array
   *   An render array containing help for specific route.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb9d6edd8dc43b500556a6390d6250d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the main help page for the Webform module.
   *
   * @return array
   *   An render array containing help for the Webform module.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildIndex',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89a06c548930d22197d3ab30ad444ded' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the videos section.
   *
   * @param bool $docs
   *   Set to TRUE to build exportable HTML documentation.
   *
   * @return array
   *   An render array containing the videos section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildVideos',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd16f49b1e128becf425926de618e872' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build video link.
   *
   * @param string $video_id
   *   Video id.
   * @param string|null $video_display
   *   Video displa type.
   * @param string|null $title
   *   Link title.
   * @param array $options
   *   Link options.
   *
   * @return array
   *   A renderable array containing a link to a video.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildVideoLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4e2cde357164b49732845bc1ea0424f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the add-ons section.
   *
   * @param bool $docs
   *   Set to TRUE to build exportable HTML documentation.
   *
   * @return array
   *   An render array containing the add-ons section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildAddOns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03d2899d90b6e55b3e9568d8a9b9f3d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the libraries section.
   *
   * @param bool $docs
   *   Set to TRUE to build exportable HTML documentation.
   *
   * @return array
   *   An render array containing the libraries section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7258e856c1e8312ff01da7d88221569' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the comparison section.
   *
   * @param bool $docs
   *   Set to TRUE to build exportable HTML documentation.
   *
   * @return array
   *   An render array containing the comparison section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManagerInterface',
         'functionName' => 'buildComparison',
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