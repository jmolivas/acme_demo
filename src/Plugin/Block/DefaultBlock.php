<?php

/**
 * @file
 * Contains Drupal\acme\Plugin\Block\DefaultBlock.
 */

namespace Drupal\acme\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("default_block")
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => 'default block, nothing here yet',
    ];
  }

}
