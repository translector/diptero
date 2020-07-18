<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Database/Transaction.php-1594234425',
   'data' => 
  array (
    '5e3180faffba408f84379f922db34a9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A wrapper class for creating and managing database transactions.
 *
 * Not all databases or database configurations support transactions. For
 * example, MySQL MyISAM tables do not. It is also easy to begin a transaction
 * and then forget to commit it, which can lead to connection errors when
 * another transaction is started.
 *
 * This class acts as a wrapper for transactions. To begin a transaction,
 * simply instantiate it. When the object goes out of scope and is destroyed
 * it will automatically commit. It also will check to see if the specified
 * connection supports transactions. If not, it will simply skip any transaction
 * commands, allowing user-space code to proceed normally. The only difference
 * is that rollbacks won\'t actually do anything.
 *
 * In the vast majority of cases, you should not instantiate this class
 * directly. Instead, call ->startTransaction(), from the appropriate connection
 * object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Transaction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2621ea4c37bf28dae939a9c145f33eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The connection object for this transaction.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Transaction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9643472722040e722a85af521597ab8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A boolean value to indicate whether this transaction has been rolled back.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Transaction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cf25afebd2fd7b4929a9bc9cc080b3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the transaction.
   *
   * This is used to label the transaction savepoint. It will be overridden to
   * \'drupal_transaction\' if there is no transaction depth.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Transaction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f14659b6284027be4311b166e241c3df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the name of the transaction or savepoint.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Transaction',
         'functionName' => 'name',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddf88acdf2d039c6d236aca740a6842d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rolls back the current transaction.
   *
   * This is just a wrapper method to rollback whatever transaction stack we are
   * currently in, which is managed by the connection object itself. Note that
   * logging (preferable with watchdog_exception()) needs to happen after a
   * transaction has been rolled back or the log messages will be rolled back
   * too.
   *
   * @see \\Drupal\\Core\\Database\\Connection::rollBack()
   * @see watchdog_exception()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Transaction',
         'functionName' => 'rollBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));