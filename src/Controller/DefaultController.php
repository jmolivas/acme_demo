<?php

/**
 * @file
 * Contains Drupal\acme\Controller\DefaultController.
 */

namespace Drupal\acme\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return "Hello " . $name . " !";
  }
}
