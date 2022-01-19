<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$klarna_code = 'KLARNA_PAYOVERTIME';
include(DIR_FS_CATALOG.'lang/english/modules/payment/klarna.php');

$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE'] = 'Klarna Financiaci&oacute;n mensual';
$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE'] = 'El pago a trav&eacute;s de la financiaci&oacute;n mensual fue cancelado.';

foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
