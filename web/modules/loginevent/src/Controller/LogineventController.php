<?php declare(strict_types = 1);

namespace Drupal\loginevent\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Loginevent routes.
 */
final class LogineventController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
