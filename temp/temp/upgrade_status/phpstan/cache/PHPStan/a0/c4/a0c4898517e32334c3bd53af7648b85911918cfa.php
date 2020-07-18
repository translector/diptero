<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:20:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:46:"Gets the schema for a single field definition.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:315:"Entity types may override this method in order to optimize the generated
schema for given field. While all optimizations that apply to a single
field have to be added here, all cross-field optimizations should be via
SqlContentEntityStorageSchema::getEntitySchema() instead; e.g.,
an index spanning multiple fields.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:50:"\\Drupal\\Core\\Field\\FieldStorageDefinitionInterface";}s:10:"isVariadic";b:0;s:13:"parameterName";s:19:"$storage_definition";s:11:"description";s:0:"";}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:68:"The storage definition of the field whose schema has to be returned.";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}s:10:"isVariadic";b:0;s:13:"parameterName";s:11:"$table_name";s:11:"description";s:0:"";}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:47:"The name of the table columns will be added to.";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\ArrayTypeNode":1:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:6:"string";}}s:10:"isVariadic";b:0;s:13:"parameterName";s:15:"$column_mapping";s:11:"description";s:0:"";}}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:57:"A mapping of field column names to database column names.";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}s:11:"description";s:0:"";}}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:60:"The schema definition for the table with the following keys:";}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:59:"- fields: The schema definition for the each field columns.";}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:49:"- indexes: The schema definition for the indexes.";}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:57:"- unique keys: The schema definition for the unique keys.";}i:16;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:59:"- foreign keys: The schema definition for the foreign keys.";}i:17;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:18;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@throws";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ThrowsTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:33:"\\Drupal\\Core\\Field\\FieldException";}s:11:"description";s:0:"";}}i:19;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:109:"Exception thrown if the schema contains reserved column names or if the
initial values definition is invalid.";}}}',
));