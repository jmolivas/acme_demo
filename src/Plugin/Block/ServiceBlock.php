<?php

/**
 * @file
 * Contains Drupal\acme\Plugin\Block\ServiceBlock.
 */

namespace Drupal\acme\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\acme\DefaultService;

/**
 * Provides a 'ServiceBlock' block.
 *
 * @Block(
 *  id = "service_block",
 *  admin_label = @Translation("service_block")
 * )
 */
class ServiceBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Drupal\acme\DefaultService definition.
   *
   * @var Drupal\acme\DefaultService
   */
  protected $acme_myservice;

  /**
   * Construct.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param string $plugin_definition
   *   The plugin implementation definition.
   */
  public function __construct(
        array $configuration,
        $plugin_id,
        $plugin_definition,
        DefaultService $acme_myservice
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->acme_myservice = $acme_myservice;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('acme.myservice')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $nodeTitle = $this->acme_myservice->laadRecord(2);
    return [
      '#markup' => $nodeTitle,
    ];
  }

}
