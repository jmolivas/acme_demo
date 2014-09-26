<?php

/**
 * @file
 * Contains Drupal\acme\Controller\MyController.
 */

namespace Drupal\acme\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyController extends ControllerBase {

  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($arg1, $arg2) {
    return "Implements method index with parameters $arg1, $arg2";
  }
}
