<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:8:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:74:"Returns whether this entity is being changed as part of a synchronization.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:405:"If you are writing code that responds to a change in this entity (insert,
update, delete, presave, etc.), and your code would result in a change to
this entity itself, a configuration change (whether related to this entity,
another entity, or non-entity configuration), you need to check and see if
this entity change is part of a synchronization process, and skip executing
your code if that is the case.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:822:"For example, \\Drupal\\node\\Entity\\NodeType::postSave() adds the default body
field to newly created node type configuration entities, which is a
configuration change. You would not want this code to run during an import,
because imported entities were already given the body field when they were
originally created, and the imported configuration includes all of their
currently-configured fields. On the other hand,
\\Drupal\\field\\Entity\\FieldStorageConfig::preSave() and the methods it calls
make sure that the storage tables are created or updated for the field
storage configuration entity, which is not a configuration change, and it
must be done whether due to an import or not. So, the first method should
check $entity->isSyncing() and skip executing if it returns TRUE, and the
second should not perform this check.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":2:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":1:{s:4:"name";s:4:"bool";}s:11:"description";s:0:"";}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:105:"TRUE if the configuration entity is being created, updated, or deleted
through a synchronization process.";}}}',
));