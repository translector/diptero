<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:15:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:60:"Defines an interface for managing entity definition updates.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:374:"During the application lifetime, the definitions of various entity types and
their data components (e.g., fields for fieldable entity types) can change.
For example, updated code can be deployed. Some entity handlers may need to
perform complex or long-running logic in response to the change. For
example, a SQL-based storage handler may need to update the database schema.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:287:"To support this,
\\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface has methods
to retrieve the last installed definitions as well as the definitions
specified by the current codebase. It also has create/update/delete methods
to bring the former up to date with the latter.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:166:"However, it is not the responsibility of the entity manager to decide how to
report the differences or when to apply each update. This interface is for
managing that.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:729:"This interface also provides methods to retrieve instances of the definitions
to be updated ready to be manipulated. In fact when definitions change in
code the system needs to be notified about that and the definitions stored in
state need to be reconciled with the ones living in code. This typically
happens in Update API functions, which need to take the system from a known
state to another known state. Relying on the definitions living in code might
prevent this, as the system might transition directly to the last available
state, and thus skipping the intermediate steps. Manipulating the definitions
in state allows to avoid this and ensures that the various steps of the
update process are predictable and repeatable.";}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:10;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:63:"\\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getDefinition()";}}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:94:"\\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface::getLastInstalledDefinition()";}}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:77:"\\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldStorageDefinitions()";}}i:13;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:107:"\\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface::getLastInstalledFieldStorageDefinitions()";}}i:14;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:15:"hook_update_N()";}}}}',
));