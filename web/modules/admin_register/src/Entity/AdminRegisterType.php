<?php declare(strict_types = 1);

namespace Drupal\admin_register\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Admin Register type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "admin_register_type",
 *   label = @Translation("Admin Register type"),
 *   label_collection = @Translation("Admin Register types"),
 *   label_singular = @Translation("admin register type"),
 *   label_plural = @Translation("admin registers types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count admin registers type",
 *     plural = "@count admin registers types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\admin_register\Form\AdminRegisterTypeForm",
 *       "edit" = "Drupal\admin_register\Form\AdminRegisterTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\admin_register\AdminRegisterTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer admin_register types",
 *   bundle_of = "admin_register",
 *   config_prefix = "admin_register_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/admin_register_types/add",
 *     "edit-form" = "/admin/structure/admin_register_types/manage/{admin_register_type}",
 *     "delete-form" = "/admin/structure/admin_register_types/manage/{admin_register_type}/delete",
 *     "collection" = "/admin/structure/admin_register_types",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   },
 * )
 */
final class AdminRegisterType extends ConfigEntityBundleBase {

  /**
   * The machine name of this admin register type.
   */
  protected string $id;

  /**
   * The human-readable name of the admin register type.
   */
  protected string $label;

}
