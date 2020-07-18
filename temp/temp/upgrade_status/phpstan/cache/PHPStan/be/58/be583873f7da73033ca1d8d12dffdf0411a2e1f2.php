<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/File/MimeType/MimeTypeGuesser.php-1594234425',
   'data' => 
  array (
    'a9896c76047c9f22d7901c241d79377c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a MIME type guesser that also supports stream wrapper paths.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6019cd0e15aac544644fa8280003dc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of arrays of registered guessers keyed by priority.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fe945a4e887e7bc13f81a5a99ef6fe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the array of guessers sorted by priority.
   *
   * If this is NULL a rebuild will be triggered.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface[]
   *
   * @see \\Drupal\\Core\\File\\MimeType\\MimeTypeGuesser::addGuesser()
   * @see \\Drupal\\Core\\File\\MimeType\\MimeTypeGuesser::sortGuessers()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2615825e7745a7d05e98ff31f657570c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stream wrapper manager.
   *
   * @var \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab3140b0e9559d172cde1557aed9110e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a MimeTypeGuesser object.
   *
   * @param \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface $stream_wrapper_manager
   *   The stream wrapper manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a8fd063f6bff02b635448d15cf604ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => 'guess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19c903f211515d08aa36efc6b1c9c6e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Appends a MIME type guesser to the guessers chain.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface $guesser
   *   The guesser to be appended.
   * @param int $priority
   *   The priority of the guesser being added.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => 'addGuesser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '814c815d33cb3d9758827762c0138b9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sorts guessers according to priority.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface[]
   *   A sorted array of MIME type guesser objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => 'sortGuessers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74ffd042764c32cff8814c09772685b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A helper function to register with Symfony\'s singleton MIME type guesser.
   *
   * Symfony\'s default mimetype guessers have dependencies on PHP\'s fileinfo
   * extension or being able to run the system command file. Drupal\'s guesser
   * does not have these dependencies.
   *
   * @see \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File\\MimeType',
         'uses' => 
        array (
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'symfonymimetypeguesser' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
         'functionName' => 'registerWithSymfonyGuesser',
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