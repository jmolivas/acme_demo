<?php

/**
 * @file
 * Contains Drupal\acme\Controller\MyServiceController.
 */

namespace Drupal\acme\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\acme\DefaultService;

class MyServiceController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Drupal\acme\DefaultService definition.
   *
   * @var Drupal\acme\DefaultService
   */
  protected $acme_myservice;

  public function __construct(DefaultService $acme_myservice) {
    $this->acme_myservice = $acme_myservice;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('acme.myservice')
    );
  }

  /**
   * Loadrecord.
   *
   * @return string
   *   Return Hello string.
   */
  public function loadrecord($id) {
    
    $nodeTitle = $this->acme_myservice->laadRecord($id);

    return $nodeTitle;
  }
}
