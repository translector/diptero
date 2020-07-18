<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:30:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:44:"Provides entity revision destination plugin.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:110:"Refer to the parent class for configuration keys:
\\Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase";}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:228:"Entity revisions can only be migrated after the entity to which the revisions
belong has been migrated. For example, revisions of a given content type can
be migrated only after the nodes of that content type have been migrated.";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:359:"In order to avoid revision ID conflicts, make sure that the entity migration
also includes the revision ID. If the entity migration did not include the
revision ID, the entity would get the next available revision ID (1 when
migrating to a clean database). Then, when revisions are migrated after the
entities, the revision IDs would almost certainly collide.";}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:245:"The examples below contain simple node and node revision migrations. The
examples use the EmbeddedDataSource source plugin for the sake of
simplicity. The important part of both examples is the \'vid\' property, which
is the revision ID for nodes.";}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:70:"Example of \'article\' node migration, which must be executed before the";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:20:"\'article\' revisions.";}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@code";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:0:"";}}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:103:"id: custom_article_migration
label: \'Custom article migration\'
source:
plugin: embedded_data
data_rows:";}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:265:"-
nid: 1
vid: 2
revision_timestamp: 1514661000
revision_log: \'Second revision\'
title: \'Current title\'
content: \'<p>Current content</p>\'
ids:
nid:
type: integer
process:
nid: nid
vid: vid
revision_timestamp: revision_timestamp
revision_log: revision_log
title: title";}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:23:"\'body/0/value\': content";}i:16;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:121:"\'body/0/format\':
plugin: default_value
default_value: basic_html
destination:
plugin: entity:node
default_bundle: article";}i:17;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:8:"@endcode";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:0:"";}}i:18;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:19;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:103:"Example of the corresponding node revision migration, which must be executed
after the above migration.";}i:20;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@code";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:0:"";}}i:21;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:121:"id: custom_article_revision_migration
label: \'Custom article revision migration\'
source:
plugin: embedded_data
data_rows:";}i:22;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:335:"-
nid: 1
vid: 1
revision_timestamp: 1514660000
revision_log: \'First revision\'
title: \'Previous title\'
content: \'<p>Previous content</p>\'
ids:
nid:
type: integer
process:
nid:
plugin: migration_lookup
migration: custom_article_migration
source: nid
vid: vid
revision_timestamp: revision_timestamp
revision_log: revision_log
title: title";}i:23;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:23:"\'body/0/value\': content";}i:24;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:164:"\'body/0/format\':
plugin: default_value
default_value: basic_html
destination:
plugin: entity_revision:node
default_bundle: article
migration_dependencies:
required:";}i:25;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:26:"- custom_article_migration";}i:26;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:8:"@endcode";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:0:"";}}i:27;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:28;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:19:"@MigrateDestination";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:92:"(
id = "entity_revision",
deriver = "Drupal\\migrate\\Plugin\\Derivative\\MigrateEntityRevision"";}}i:29;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:1:")";}}}',
));