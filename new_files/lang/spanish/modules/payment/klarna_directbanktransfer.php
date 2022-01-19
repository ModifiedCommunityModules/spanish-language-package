<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$klarna_code = 'KLARNA_DIRECTBANKTRANSFER';
include(DIR_FS_CATALOG.'lang/english/modules/payment/klarna.php');

$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE'] = 'Klarna Pay now';
$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE'] = 'Se ha anulado el pago por domiciliaci&oacute;n bancaria.';

foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
