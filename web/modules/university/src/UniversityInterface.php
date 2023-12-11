<?php declare(strict_types = 1);

namespace Drupal\university;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining an university entity type.
 */
interface UniversityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
