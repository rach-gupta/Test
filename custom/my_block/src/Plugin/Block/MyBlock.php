<?php

namespace Drupal\my_block\Plugin\Block;
 //include('install-dir/web/libraries\phpqrcode/qrlib.php');

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use \Drupal\file\Entity\File;
require_once('libraries/phpqrcode/qrlib.php');
use PHPQRCode\QRcode;
use Drupal\my_block\Controller\QrCodeGenerate;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "my_block",
 *   admin_label = @Translation("My block"),
 * )
 */
class MyBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
	  $controller_variable = new QrCodeGenerate;
     $rendering_in_block = $controller_variable->generateQrCodes();
return $rendering_in_block;
  }
}