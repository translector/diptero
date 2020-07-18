<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/StreamWrapper/StreamWrapperManager.php-1594234425,/var/www/html/vendor/symfony/dependency-injection/ContainerAwareTrait.php-1590872761',
   'data' => 
  array (
    '31025f113f7cf65cf6dfc0fdea51f340' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a StreamWrapper manager.
 *
 * @see \\Drupal\\Core\\StreamWrapper\\StreamWrapperInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f3e6c4c15560ab2c11a63bb12c9e9bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ContainerAware trait.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09666c4205af8320433693be3327a28e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ContainerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60cbe8ac71c2871cd6a27616cf575635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Contains stream wrapper info.
   *
   * An associative array where keys are scheme names and values are themselves
   * associative arrays with the keys class, type and (optionally) service_id,
   * and string values.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26bf5e53f4f89d5167c2788a00d11786' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Contains collected stream wrappers.
   *
   * Keyed by filter, each value is itself an associative array keyed by scheme.
   * Each of those values is an array representing a stream wrapper, with the
   * following keys and values:
   *   - class: stream wrapper class name
   *   - type: a bitmask corresponding to the type constants in
   *     StreamWrapperInterface
   *   - service_id: name of service
   *
   * The array on key StreamWrapperInterface::ALL contains representations of
   * all schemes and corresponding wrappers.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c28619893b919a03b22a291849e31bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getWrappers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eee53e806bdafab725030131f02ef718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7343da43a97a004906df6e791c086dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getDescriptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3b2f9ca5984d35730a5a9b51d69ebb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getViaScheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11d7d7b2846a95e75f2608e5cc8e9d47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getViaUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11bf2189e345ba8e1700d89ff9044c54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '760905fe70bc4fb35131e0679a61f4b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a stream wrapper instance.
   *
   * @param string $scheme
   *   The scheme of the desired stream wrapper.
   * @param string $uri
   *   The URI of the stream.
   *
   * @return \\Drupal\\Core\\StreamWrapper\\StreamWrapperInterface|bool
   *   A stream wrapper object, or false if the scheme is not available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8a85bb437278365eb48125081e67f75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a stream wrapper.
   *
   * Internal use only.
   *
   * @param string $service_id
   *   The service id.
   * @param string $class
   *   The stream wrapper class.
   * @param string $scheme
   *   The scheme for which the wrapper should be registered.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'addStreamWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ae425f73eca9332eb802af5eb78b9a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers the tagged stream wrappers.
   *
   * Internal use only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'register',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '716d1962bfe9b5378716479faf44890b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unregisters the tagged stream wrappers.
   *
   * Internal use only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'unregister',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd94c2a5628a4a6dd62a97183c0d908c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'registerWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f4536090654f5bac062c659db2a944f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getTarget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb767f7271d65cf8019ccf9d444da584' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Normalizes a URI by making it syntactically correct.
   *
   * A stream is referenced as "scheme://target".
   *
   * The following actions are taken:
   * - Remove trailing slashes from target
   * - Trim erroneous leading slashes from target. e.g. ":///" becomes "://".
   *
   * @param string $uri
   *   String reference containing the URI to normalize.
   *
   * @return string
   *   The normalized URI.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'normalizeUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2a7d61e4e2c87c50522e75675bd8974' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'getScheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd71ef61d10c80288938bce152b46d89c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'isValidScheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac51849388750caafd0b2cde2e364990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StreamWrapper',
         'uses' => 
        array (
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
         'functionName' => 'isValidUri',
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