<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:15:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:33:"Returns the schema for the field.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:200:"This method is static because the field schema information is needed on
creation of the field. FieldItemInterface objects instantiated at that
time are not reliable as field settings might be missing.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:62:"Computed fields having no schema should return an empty array.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":4:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:50:"\\Drupal\\Core\\Field\\FieldStorageDefinitionInterface";}s:10:"isVariadic";b:0;s:13:"parameterName";s:17:"$field_definition";s:11:"description";s:0:"";}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:21:"The field definition.";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:5:"array";}s:11:"description";s:0:"";}}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:97:"An empty array if there is no schema, or an associative array with the
following key/value pairs:";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:547:"- columns: An array of Schema API column specifications, keyed by column
name. The columns need to be a subset of the properties defined in
propertyDefinitions(). The \'not null\' property is ignored if present,
as it is determined automatically by the storage controller depending
on the table layout and the property definitions. It is recommended to
avoid having the column definitions depend on field settings when
possible. No assumptions should be made on how storage engines
internally use the original column name to structure their storage.";}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:133:"- unique keys: (optional) An array of Schema API unique key definitions.
Only columns that appear in the \'columns\' array are allowed.";}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:354:"- indexes: (optional) An array of Schema API index definitions. Only
columns that appear in the \'columns\' array are allowed. Those indexes
will be used as default indexes. Field definitions can specify
additional indexes or, at their own risk, modify the default indexes
specified by the field-type module. Some storage engines might not
support indexes.";}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:284:"- foreign keys: (optional) An array of Schema API foreign key
definitions. Note, however, that the field data is not necessarily
stored in SQL. Also, the possible usage is limited, as you cannot
specify another field as related, only existing SQL tables,
such as {taxonomy_term_data}.";}}}',
));