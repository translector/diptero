<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/workflows/src/WorkflowTypeInterface.php-1594234425',
   'data' => 
  array (
    '13fee74d971b8cbc61425d5d628fc0dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An interface for Workflow type plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52d6c50bf570d31aaaf36ac0cdc8891b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key of the global workflow plugin form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a95c4c66c04efbba346830e1e6897533' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label for the workflow type.
   *
   * @return string
   *   The workflow type label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ba05a3ac9ca22646a61bb165092cadf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the workflow is being has data associated with it.
   *
   * @internal
   *   Marked as internal until it\'s validated this should form part of the
   *   public API in https://www.drupal.org/node/2897148.
   *
   * @param \\Drupal\\workflows\\WorkflowInterface $workflow
   *   The workflow to check.
   *
   * @return bool
   *   TRUE if the workflow is being used, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'workflowHasData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3265cfd78e91a7d8e9b4f78072cd938d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the workflow state has data associated with it.
   *
   * @internal
   *   Marked as internal until it\'s validated this should form part of the
   *   public API in https://www.drupal.org/node/2897148.
   *
   * @param \\Drupal\\workflows\\WorkflowInterface $workflow
   *   The workflow to check.
   * @param \\Drupal\\workflows\\StateInterface $state
   *   The workflow state to check.
   *
   * @return bool
   *   TRUE if the workflow state is being used, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'workflowStateHasData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec480e7d92b0fe6a9160545fbee41342' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the initial state for the workflow.
   *
   * @return \\Drupal\\workflows\\StateInterface
   *   The initial state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getInitialState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30b03242e7dfea3542b4256305a85ec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the required states of workflow type.
   *
   * This is usually specified in the workflow type annotation.
   *
   * @return string[]
   *   The required states.
   *
   * @see \\Drupal\\workflows\\Annotation\\WorkflowType
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getRequiredStates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '599e46c4a398b3d9b5d70309d3f017a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Informs the plugin that a dependency of the workflow will be deleted.
   *
   * @param array $dependencies
   *   An array of dependencies that will be deleted keyed by dependency type.
   *
   * @return bool
   *   TRUE if the workflow settings have been changed, FALSE if not.
   *
   * @see \\Drupal\\Core\\Config\\ConfigEntityInterface::onDependencyRemoval()
   *
   * @todo https://www.drupal.org/node/2579743 make part of a generic interface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60b3378cb389300448bf08114927532a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a state to the workflow.
   *
   * @param string $state_id
   *   The state\'s ID.
   * @param string $label
   *   The state\'s label.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown if a state already exists or state ID is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'addState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cb9078dd52804dc882352ea8344a6ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the workflow has a state with the provided ID.
   *
   * @param string $state_id
   *   The state\'s ID.
   *
   * @return bool
   *   TRUE if the workflow has a state with the provided ID, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'hasState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f1c1ba3aad0e90a971c6a9bd7302f50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets state objects for the provided state IDs.
   *
   * @param string[] $state_ids
   *   A list of state IDs to get. If NULL then all states will be returned.
   *
   * @return \\Drupal\\workflows\\StateInterface[]
   *   An array of workflow states, keyed by state IDs.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if $state_ids contains a state ID that does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getStates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abf16de21cab534e7fef97612b58e67b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a workflow state.
   *
   * @param string $state_id
   *   The state\'s ID.
   *
   * @return \\Drupal\\workflows\\StateInterface
   *   The workflow state.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if $state_id does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e68fc8b0c370e97b56dfeb2f492d412' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a state\'s label.
   *
   * @param string $state_id
   *   The state ID to set the label for.
   * @param string $label
   *   The state\'s label.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'setStateLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e2b8f5099ecb17c6b83f7af31f9ba21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a state\'s weight value.
   *
   * @param string $state_id
   *   The state ID to set the weight for.
   * @param int $weight
   *   The state\'s weight.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'setStateWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fd068e3b073ccf9f4e587a8ec556125' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a state from the workflow.
   *
   * @param string $state_id
   *   The state ID to delete.
   *
   * @return $this
   *   The workflow type plugin.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if $state_id does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'deleteState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e71c5320e2c6bf566522e0d8f5543e28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a transition to the workflow.
   *
   * @param string $id
   *   The transition ID.
   * @param string $label
   *   The transition\'s label.
   * @param array $from_state_ids
   *   The state IDs to transition from.
   * @param string $to_state_id
   *   The state ID to transition to.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown if either state does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'addTransition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be607b671161f9519c544648c5954562' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a transition object for the provided transition ID.
   *
   * @param string $transition_id
   *   A transition ID.
   *
   * @return \\Drupal\\workflows\\TransitionInterface
   *   The transition.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if $transition_id does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getTransition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '697bddc8b11a31269d5b9b55ff480b1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a transition exists.
   *
   * @param string $transition_id
   *   The transition ID.
   *
   * @return bool
   *   TRUE if the transition exists, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'hasTransition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '879e7cf75f9fe0855b001a529ce764f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets transition objects for the provided transition IDs.
   *
   * @param string[] $transition_ids
   *   A list of transition IDs to get. If NULL then all transitions will be
   *   returned.
   *
   * @return \\Drupal\\workflows\\TransitionInterface[]
   *   An array of transition objects.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if $transition_ids contains a transition ID that does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getTransitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '843d62a739b55e35578e7e4099b77ea4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the transition IDs for a state for the provided direction.
   *
   * @param $state_id
   *   The state to get transitions for.
   * @param string $direction
   *   (optional) The direction of the transition, defaults to
   *   TransitionInterface::DIRECTION_FROM. Possible values are:
   *   TransitionInterface::DIRECTION_FROM or TransitionInterface::DIRECTION_TO.
   *
   * @return array
   *   The transition IDs for a state for the provided direction.
   *
   * @see \\Drupal\\workflows\\TransitionInterface::DIRECTION_FROM
   * @see \\Drupal\\workflows\\TransitionInterface::DIRECTION_TO
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getTransitionsForState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '174f6804b80fa3a81d69f3e1377db990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a transition from state to state.
   *
   * @param string $from_state_id
   *   The state ID to transition from.
   * @param string $to_state_id
   *   The state ID to transition to.
   *
   * @return \\Drupal\\workflows\\TransitionInterface
   *   The transitions.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the transition does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'getTransitionFromStateToState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccae70c89e9b798a1bb4c283a714efe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a transition from state to state exists.
   *
   * @param string $from_state_id
   *   The state ID to transition from.
   * @param string $to_state_id
   *   The state ID to transition to.
   *
   * @return bool
   *   TRUE if the transition exists, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'hasTransitionFromStateToState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f57a87b3c953b0ccc993bfe16d434b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a transition\'s label.
   *
   * @param string $transition_id
   *   The transition ID.
   * @param string $label
   *   The transition\'s label.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the transition does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'setTransitionLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e498a659e9dff56cd531d3e2f631e93f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a transition\'s weight.
   *
   * @param string $transition_id
   *   The transition ID.
   * @param int $weight
   *   The transition\'s weight.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the transition does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'setTransitionWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39c261c36b38de65c17aac08dbc9cac7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a transition\'s from states.
   *
   * @param string $transition_id
   *   The transition ID.
   * @param array $from_state_ids
   *   The state IDs to transition from.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the transition does not exist or the states do not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'setTransitionFromStates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f2f2a81e5e4a8d0e5999908241bcbb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a transition.
   *
   * @param string $transition_id
   *   The transition ID.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the transition does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
        ),
         'className' => 'Drupal\\workflows\\WorkflowTypeInterface',
         'functionName' => 'deleteTransition',
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