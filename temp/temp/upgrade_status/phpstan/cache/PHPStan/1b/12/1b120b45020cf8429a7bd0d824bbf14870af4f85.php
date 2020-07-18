<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:16:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:73:"Gets the entity type\'s most recently installed field storage definitions.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:657:"During the application lifetime, field storage definitions can change. For
example, updated code can be deployed. The getFieldStorageDefinitions()
method will always return the definitions as determined by the current
codebase. This method, however, returns what the definitions were when the
last time that one of the
\\Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface events was last
fired and completed successfully. In other words, the definitions that
the entity type\'s handlers have incorporated into the application state.
For example, if the entity type\'s storage handler is SQL-based, the
definitions for which database tables were created.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:147:"Application management code can check if getFieldStorageDefinitions()
differs from getLastInstalledFieldStorageDefinitions() and decide whether
to:";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:137:"- Invoke the appropriate
\\Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface
events so that handlers react to the new definitions.";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:79:"- Raise a warning that the application state is incompatible with the
codebase.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:28:"- Perform some other action.";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:10:"isVariadic";b:0;s:13:"parameterName";s:15:"$entity_type_id";s:11:"description";s:0:"";}}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:19:"The entity type ID.";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\ArrayTypeNode":1:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:50:"\\Drupal\\Core\\Field\\FieldStorageDefinitionInterface";}}s:11:"description";s:0:"";}}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:90:"The array of installed field storage definitions for the entity type,
keyed by field name.";}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:15;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:47:"\\Drupal\\Core\\Entity\\EntityTypeListenerInterface";}}}}',
));