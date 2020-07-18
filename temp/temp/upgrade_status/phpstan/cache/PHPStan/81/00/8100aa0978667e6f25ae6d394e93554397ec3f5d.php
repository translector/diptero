<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_submission_log/src/WebformSubmissionLogManagerInterface.php-1594690523',
   'data' => 
  array (
    '4efefe2fc5cb38a1207fcca43fcb747f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for webform submission log manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_log',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_submission_log\\WebformSubmissionLogManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68853c2857e5a570042f1520752c117d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the table where log entries are stored.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_log',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_submission_log\\WebformSubmissionLogManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd4e2be48d54ba23af8643761a59c360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Insert submission log.
   *
   * @param array $fields
   *   An associative array of fields to be inserted into the submission log.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_log',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_submission_log\\WebformSubmissionLogManagerInterface',
         'functionName' => 'insert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c59766f2f71d2262d95e45d090a3ad1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform submission log query.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission entity.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   (optional) A webform submission source entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user account.
   * @param array $options
   *   (optional) Additional options and query conditions.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   A webform submission log select query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_log',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_submission_log\\WebformSubmissionLogManagerInterface',
         'functionName' => 'getQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bfeb4bedee91a0e74d553413333453e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Log webform submission logs.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission entity.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   (optional) A webform submission source entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user account.
   * @param array $options
   *   (optional) Additional options and query conditions.
   *
   * @return array
   *   An array of webform submission logs.
   *   Log entry object includes:
   *   - lid: (int) ID of the log entry.
   *   - sid: (int) Webform submission ID on which the operation was executed.
   *   - uid: (int) UID of the user that executed the operation.
   *   - handler_id: (string) Optional name of the handler that executed the
   *     operation.
   *   - operation: (string) Name of the executed operation.
   *   - message: (string) Untranslated message of the executed operation.
   *   - variables: (array) Variables to use whenever message has to be
   *     translated.
   *   - data: (array) Data associated with this log entry.
   *   - timestamp: (int) Timestamp when the operation was executed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_log',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_submission_log\\WebformSubmissionLogManagerInterface',
         'functionName' => 'loadByEntities',
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