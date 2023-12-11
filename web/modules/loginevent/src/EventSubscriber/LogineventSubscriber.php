<?php declare(strict_types = 1);

namespace Drupal\loginevent\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\loginevent\Event\afterLoginEvent;

/**
 * @todo Add description for this subscriber.
 */
final class LogineventSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    return [
        afterLoginEvent::EVENT_NAME => 'onUserLogin'
    ];
  }
  
  public function onUserLogin() {
      \Drupal::messenger()->addStatus("uer logged in just now");
  }

}
