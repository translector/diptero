<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:9:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:38:"Base class for any views plugin types.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:183:"Via the @Plugin definition the plugin may specify a theme function or
template to be used for the plugin. It also can auto-register the theme
implementation for that file or function.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:407:"- theme: the theme implementation to use in the plugin. This may be the name
of the function (without theme_ prefix) or the template file (without
template engine extension).
If a template file should be used, the file has to be placed in the
module\'s templates folder.
Example: theme = "mymodule_row" of module "mymodule" will implement
mymodule-row.html.twig in the [..]/modules/mymodule/templates folder.";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:207:"- register_theme: (optional) When set to TRUE (default) the theme is
registered automatically. When set to FALSE the plugin reuses an existing
theme implementation, defined by another module or views plugin.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:164:"- theme_file: (optional) the location of an include file that may hold the
theme or preprocess function. The location has to be relative to module\'s
root directory.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:103:"- module: machine name of the module. It must be present for any plugin that
wants to register a theme.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:8:"@ingroup";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:13:"views_plugins";}}}}',
));