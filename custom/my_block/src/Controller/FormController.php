<?php

namespace Drupal\my_block\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityInterface;
use Drupal\views\Plugin\views\query\QueryPluginBase;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Drupal\Core\Ajax\RedirectCommand;
/**
 * Class FormController.
 */
class FormController extends ControllerBase {

  public function generateQrCodes() {
     print_r('fgh');
    }
}
//**********************************8