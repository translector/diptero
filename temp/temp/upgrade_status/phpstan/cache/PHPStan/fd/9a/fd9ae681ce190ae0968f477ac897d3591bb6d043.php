<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:17:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:45:"Returns a list of currently installed themes.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\ArrayTypeNode":1:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:32:"\\Drupal\\Core\\Extension\\Extension";}}s:11:"description";s:0:"";}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:164:"An associative array of the currently installed themes. The keys are the
themes\' machine names and the values are Extension objects having the
following properties:";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:56:"- filename: The filepath and name of the .info.yml file.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:38:"- name: The machine name of the theme.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:52:"- status: 1 for installed, 0 for uninstalled themes.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:43:"- info: The contents of the .info.yml file.";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:133:"- stylesheets: A two dimensional array, using the first key for the
media attribute (e.g. \'all\'), the second for the name of the file";}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:127:"(e.g. style.css). The value is a complete filepath (e.g.
themes/bartik/style.css). Not set if no stylesheets are defined in the";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:15:".info.yml file.";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:166:"- scripts: An associative array of JavaScripts, using the filename as key
and the complete filepath as value. Not set if no scripts are defined
in the .info.yml file.";}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:39:"- prefix: The base theme engine prefix.";}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:47:"- engine: The machine name of the theme engine.";}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:138:"- base_theme: If this is a sub-theme, the machine name of the base theme
defined in the .info.yml file. Otherwise, the element is not set.";}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:569:"- base_themes: If this is a sub-theme, an associative array of the
base-theme ancestors of this theme, starting with this theme\'s base
theme, then the base theme\'s own base theme, etc. Each entry has an
array key equal to the theme\'s machine name, and a value equal to the
human-readable theme name; if a theme with matching machine name does
not exist in the system, the value will instead be NULL (and since the
system would not know whether that theme itself has a base theme, that
will end the array of base themes). This is not set if the theme is not
a sub-theme.";}i:16;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:388:"- sub_themes: An associative array of themes on the system that are
either direct sub-themes (that is, they declare this theme to be
their base theme), direct sub-themes of sub-themes, etc. The keys are
the themes\' machine names, and the values are the themes\'
human-readable names. This element is not set if there are no themes on
the system that declare this theme as their base theme.";}}}',
));