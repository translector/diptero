<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Access/CsrfTokenGenerator.php-1594234425',
   'data' => 
  array (
    '7027751d6c4152fe08e284b756b11440' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates and validates CSRF tokens.
 *
 * @see \\Drupal\\Tests\\Core\\Access\\CsrfTokenGeneratorTest
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e580044fbd11f3138c25accecf53dd4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The private key service.
   *
   * @var \\Drupal\\Core\\PrivateKey
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07ac78e135e8a0a9995b47ce0cda2906' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The session metadata bag.
   *
   * @var \\Drupal\\Core\\Session\\MetadataBag
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22beb89e6ca2770094c81ceb42c14b0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs the token generator.
   *
   * @param \\Drupal\\Core\\PrivateKey $private_key
   *   The private key service.
   * @param \\Drupal\\Core\\Session\\MetadataBag $session_metadata
   *   The session metadata bag.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97bdc4f49ca8787fc51f1cc9a8942002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a token based on $value, the user session, and the private key.
   *
   * The generated token is based on the session of the current user. Normally,
   * anonymous users do not have a session, so the generated token will be
   * different on every page request. To generate a token for users without a
   * session, manually start a session prior to calling this function.
   *
   * @param string $value
   *   (optional) An additional value to base the token on.
   *
   * @return string
   *   A 43-character URL-safe token for validation, based on the token seed,
   *   the hash salt provided by Settings::getHashSalt(), and the
   *   \'drupal_private_key\' configuration variable.
   *
   * @see \\Drupal\\Core\\Site\\Settings::getHashSalt()
   * @see \\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface::start()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66c2038d4e6729bff5303d44ee5e3cbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates a token based on $value, the user session, and the private key.
   *
   * @param string $token
   *   The token to be validated.
   * @param string $value
   *   (optional) An additional value to base the token on.
   *
   * @return bool
   *   TRUE for a valid token, FALSE for an invalid token.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52283a32085f20ed6002340774d48bd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a token based on $value, the token seed, and the private key.
   *
   * @param string $seed
   *   The per-session token seed.
   * @param string $value
   *   (optional) An additional value to base the token on.
   *
   * @return string
   *   A 43-character URL-safe token for validation, based on the token seed,
   *   the hash salt provided by Settings::getHashSalt(), and the site private
   *   key.
   *
   * @see \\Drupal\\Core\\Site\\Settings::getHashSalt()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'metadatabag' => 'Drupal\\Core\\Session\\MetadataBag',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Access\\CsrfTokenGenerator',
         'functionName' => 'computeToken',
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