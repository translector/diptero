<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:14:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:25:"Logger channel interface.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:229:"This interface defines the full behavior of the central Drupal logger
facility. However, when writing code that does logging, use the generic
\\Psr\\Log\\LoggerInterface for typehinting instead (you shouldn\'t need the
methods here).";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:346:"To add a new logger to the system, implement \\Psr\\Log\\LoggerInterface and
add a service for that class to a services.yml file tagged with the \'logger\'
tag. The default logger channel implementation will call the log() method
of every logger service with some useful data set in the $context argument
of log(): request_uri, referer, ip, user, uid.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:291:"SECURITY NOTE: the caller might also set a \'link\' in the $context array
which will be printed as-is by the dblog module under an "operations"
header. Usually this is a "view", "edit" or similar relevant link. Make sure
to use proper, secure link generation facilities; some are listed below.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:34:"\\Drupal\\Core\\Logger\\RfcLoggerTrait";}}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:24:"\\Psr\\Log\\LoggerInterface";}}i:10;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:50:"\\Drupal\\Core\\Logger\\\\LoggerChannelFactoryInterface";}}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:43:"\\Drupal\\Core\\Utility\\LinkGeneratorInterface";}}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:35:"\\Drupal\\Core\\Link::fromTextAndUrl()";}}i:13;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:43:"\\Drupal\\Core\\Entity\\EntityInterface::link()";}}}}',
));