<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:54:"Stores and retrieves temporary data for a given owner.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:233:"A PrivateTempStore can be used to make temporary, non-cache data available
across requests. The data for the PrivateTempStore is stored in one
key/value collection. PrivateTempStore data expires automatically after a
given timeframe.";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:360:"The PrivateTempStore is different from a cache, because the data in it is not
yet saved permanently and so it cannot be rebuilt. Typically, the
PrivateTempStore might be used to store work in progress that is later saved
permanently elsewhere, e.g. autosave data, multistep forms, or in-progress
changes to complex configuration that are not ready to be saved.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:267:"The PrivateTempStore differs from the SharedTempStore in that all keys are
ensured to be unique for a particular user and users can never share data. If
you want to be able to share data between users or use it for locking, use
\\Drupal\\Core\\TempStore\\SharedTempStore.";}}}',
));