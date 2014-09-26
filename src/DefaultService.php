<?php

/**
 * @file
 * Contains Drupal\acme\DefaultService.
 */

namespace Drupal\acme;

use Drupal\Core\Entity\EntityManager;

class DefaultService
{

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var Drupal\Core\Entity\EntityManager
   */
  protected $entity_manager;

  public function __construct(EntityManager $entity_manager)
  {
    $this->entity_manager = $entity_manager;
  }

  public function loadRecord($id) {

    $nodeStorage = $this->entity_manager->getStorage('node');

    $node = $nodeStorage->load($id);

    // return "Implements method load";
    return 'Hello node from service '. $node->title->value;

  }
}
