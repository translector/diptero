<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:33:"Retrieves a configuration object.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:10:"isVariadic";b:0;s:13:"parameterName";s:5:"$name";s:11:"description";s:0:"";}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:232:"The name of the configuration object to retrieve. The name corresponds to
a configuration file. For @code \\Drupal::config(\'book.admin\') @endcode,
the config object returned will contain the contents of book.admin
configuration file.";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:5;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":1:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:26:"\\Drupal\\Core\\Config\\Config";}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:35:"\\Drupal\\Core\\Config\\ImmutableConfig";}}}s:11:"description";s:0:"";}}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:144:"An editable configuration object if the given name is listed in the
getEditableConfigNames() method or an immutable configuration object if
not.";}}}',
));