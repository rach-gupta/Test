<?php

namespace Drupal\my_block\Controller;
//require_once('libraries/phpqrcode/qrlib.php');
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBuilder;
use Drupal\views\Views;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Entity\EntityInterface;
use Drupal\views\Plugin\views\query\QueryPluginBase;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenModalDialogCommand;

use Drupal\Core\Ajax\CloseModalDialogCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Ajax\RedirectCommand;
require_once('libraries/phpqrcode/qrlib.php');
use PHPQRCode\QRcode;



/**
 * Class QrCodeGenerate.
 */
class QrCodeGenerate extends ControllerBase {

  public function generateQrCodes() {
	 
$dd = QRcode::png('PHP QR Code :)');//sprint_r($dd); die();
//$ff = 'shama';
return generateQrCodes();
//print_r($dd);
      
    }
	
}
//**********************************8
?>