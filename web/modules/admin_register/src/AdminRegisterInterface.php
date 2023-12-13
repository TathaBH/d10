<?php declare(strict_types = 1);

namespace Drupal\admin_register;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining an admin register entity type.
 */
interface AdminRegisterInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
