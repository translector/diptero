<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:64:"A wrapper class for creating and managing database transactions.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:249:"Not all databases or database configurations support transactions. For
example, MySQL MyISAM tables do not. It is also easy to begin a transaction
and then forget to commit it, which can lead to connection errors when
another transaction is started.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:417:"This class acts as a wrapper for transactions. To begin a transaction,
simply instantiate it. When the object goes out of scope and is destroyed
it will automatically commit. It also will check to see if the specified
connection supports transactions. If not, it will simply skip any transaction
commands, allowing user-space code to proceed normally. The only difference
is that rollbacks won\'t actually do anything.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:154:"In the vast majority of cases, you should not instantiate this class
directly. Instead, call ->startTransaction(), from the appropriate connection
object.";}}}',
));