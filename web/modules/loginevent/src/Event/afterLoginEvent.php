<?php
namespace Drupal\loginevent\Event;

use Drupal\Component\EventDispatcher\Event;
use Drupal\user\UserInterface;

class afterLoginEvent extends Event {
    public $account;
    
    const EVENT_NAME = "loginevent_userlogs";
    
    public function __construct(UserInterface $account) {
        $this->account = $account;
    }
}