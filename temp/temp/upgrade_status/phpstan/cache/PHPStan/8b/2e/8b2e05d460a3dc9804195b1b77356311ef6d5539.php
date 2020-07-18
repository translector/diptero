<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Mail/MailFormatHelper.php-1594234425',
   'data' => 
  array (
    '2986575f63c42f5f30809da76a889280' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a class containing utility methods for formatting mail messages.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d9aad0ce6d8cb66753e3124b8cde7db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Internal array of urls replaced with tokens.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27c91a98821a2ca5713871a4bc4ee906' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Quoted regex expression based on base path.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c172b83fd95590ac229ac6c72de72f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of tags supported.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e8dcd1f035aa8078748b763a478025e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs format=flowed soft wrapping for mail (RFC 3676).
   *
   * We use delsp=yes wrapping, but only break non-spaced languages when
   * absolutely necessary to avoid compatibility issues.
   *
   * We deliberately use LF rather than CRLF, see MailManagerInterface::mail().
   *
   * @param string $text
   *   The plain text to process.
   * @param string $indent
   *   (optional) A string to indent the text with. Only \'>\' characters are
   *   repeated on subsequent wrapped lines. Others are replaced by spaces.
   *
   * @return string
   *   The content of the email as a string with formatting applied.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => 'wrapMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a3f48139f97d790b85d883e57686c54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Transforms an HTML string into plain text, preserving its structure.
   *
   * The output will be suitable for use as \'format=flowed; delsp=yes\' text
   * (RFC 3676) and can be passed directly to MailManagerInterface::mail() for sending.
   *
   * We deliberately use LF rather than CRLF, see MailManagerInterface::mail().
   *
   * This function provides suitable alternatives for the following tags:
   * <a> <em> <i> <strong> <b> <br> <p> <blockquote> <ul> <ol> <li> <dl> <dt>
   * <dd> <h1> <h2> <h3> <h4> <h5> <h6> <hr>
   *
   * @param string $string
   *   The string to be transformed.
   * @param array $allowed_tags
   *   (optional) If supplied, a list of tags that will be transformed. If
   *   omitted, all supported tags are transformed.
   *
   * @return string
   *   The transformed string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => 'htmlToText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1a67aae325901b3d0966157f67d3428' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps words on a single line.
   *
   * Callback for array_walk() within
   * \\Drupal\\Core\\Mail\\MailFormatHelper::wrapMail().
   *
   * Note that we are skipping MIME content header lines, because attached
   * files, especially applications, could have long MIME types or long
   * filenames which result in line length longer than the 77 characters limit
   * and wrapping that line will break the email format. For instance, the
   * attached file hello_drupal.docx will produce the following Content-Type:
   * @code
   * Content-Type:
   * application/vnd.openxmlformats-officedocument.wordprocessingml.document;
   * name="hello_drupal.docx"
   * @endcode
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => 'wrapMailLine',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e93bfcad029a1619bc43dff64cd1434' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Keeps track of URLs and replaces them with placeholder tokens.
   *
   * Callback for preg_replace_callback() within
   * \\Drupal\\Core\\Mail\\MailFormatHelper::htmlToText().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => 'htmlToMailUrls',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea1727b04052c29edc970c0f8baed6a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces non-quotation markers from a piece of indentation with spaces.
   *
   * Callback for array_map() within
   * \\Drupal\\Core\\Mail\\MailFormatHelper::htmlToText().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => 'htmlToTextClean',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '189b415a35dadaca8d1436e0b0767c4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pads the last line with the given character.
   *
   * @param string $text
   *   The text to pad.
   * @param string $pad
   *   The character to pad the end of the string with.
   * @param string $prefix
   *   (optional) Prefix to add to the string.
   *
   * @return string
   *   The padded string.
   *
   * @see \\Drupal\\Core\\Mail\\MailFormatHelper::htmlToText()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailFormatHelper',
         'functionName' => 'htmlToTextPad',
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