<?php declare(strict_types = 1);

namespace Drupal\admin_register;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of admin register type entities.
 *
 * @see \Drupal\admin_register\Entity\AdminRegisterType
 */
final class AdminRegisterTypeListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['label'] = $this->t('Label');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    $row['label'] = $entity->label();
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render(): array {
    $build = parent::render();

    $build['table']['#empty'] = $this->t(
      'No admin register types available. <a href=":link">Add admin register type</a>.',
      [':link' => Url::fromRoute('entity.admin_register_type.add_form')->toString()],
    );

    return $build;
  }

}
