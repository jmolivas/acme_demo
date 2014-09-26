<?php

/**
 * @file
 * Contains Drupal\acme\Controller\NewController.
 */

namespace Drupal\acme\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityManager;

class NewController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var Drupal\Core\Entity\EntityManager
   */
  protected $entity_manager;

  public function __construct(EntityManager $entity_manager) {
    $this->entity_manager = $entity_manager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.manager')
    );
  }

  /**
   * Load.
   *
   * @return string
   *   Return Hello string.
   */
  public function load($id) {

   $nodeStorage = $this->entity_manager->getStorage('node');

   $node = $nodeStorage->load($id);

// return "Implements method load";
   return 'Hello node '. $node->title->value;
  }

}
