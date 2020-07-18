<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/FunctionalJavascriptTests/DrupalSelenium2Driver.php-1594234425',
   'data' => 
  array (
    '0a6b582c3838df40c96670e2122d103b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a driver for Selenium testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
          'selenium2driver' => 'Behat\\Mink\\Driver\\Selenium2Driver',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unknownerror' => 'WebDriver\\Exception\\UnknownError',
          'servicefactory' => 'WebDriver\\ServiceFactory',
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\DrupalSelenium2Driver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '997bf6988f37d4775b9e4a97653d0c44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
          'selenium2driver' => 'Behat\\Mink\\Driver\\Selenium2Driver',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unknownerror' => 'WebDriver\\Exception\\UnknownError',
          'servicefactory' => 'WebDriver\\ServiceFactory',
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\DrupalSelenium2Driver',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fbdfba326b04fa92b00b60652ccabd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
          'selenium2driver' => 'Behat\\Mink\\Driver\\Selenium2Driver',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unknownerror' => 'WebDriver\\Exception\\UnknownError',
          'servicefactory' => 'WebDriver\\ServiceFactory',
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\DrupalSelenium2Driver',
         'functionName' => 'setCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1824ce83d4dcf86cb32d859c02436140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uploads a file to the Selenium instance and returns the remote path.
   *
   * \\Behat\\Mink\\Driver\\Selenium2Driver::uploadFile() is a private method so
   * that can\'t be used inside a test, but we need the remote path that is
   * generated when uploading to make sure the file reference exists on the
   * container running selenium.
   *
   * @param string $path
   *   The path to the file to upload.
   *
   * @return string
   *   The remote path.
   *
   * @throws \\Behat\\Mink\\Exception\\DriverException
   *   When PHP is compiled without zip support, or the file doesn\'t exist.
   * @throws \\WebDriver\\Exception\\UnknownError
   *   When an unknown error occurred during file upload.
   * @throws \\Exception
   *   When a known error occurred during file upload.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
          'selenium2driver' => 'Behat\\Mink\\Driver\\Selenium2Driver',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unknownerror' => 'WebDriver\\Exception\\UnknownError',
          'servicefactory' => 'WebDriver\\ServiceFactory',
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\DrupalSelenium2Driver',
         'functionName' => 'uploadFileAndGetRemoteFilePath',
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