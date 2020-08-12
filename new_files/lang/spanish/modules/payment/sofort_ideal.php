<?php
/* -----------------------------------------------------------------------------------------
   $Id: sofort_ideal.php 11380 2018-07-30 14:21:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Una vez que el cliente haya elegido este m&eacute;todo de pago y su banco, ser&aacute; remitido por la SOFORT GmbH en su banco. Gasta su pago y luego regresa al sistema de la tienda. Una vez que la confirmaci&oacute;n del pago se realiza con &eacute;xito a trav&eacute;s de la SOFORT GmbH una llamada de vuelta al sistema de la tienda en lugar de que cambie el estado del pago del pedido en consecuencia.<br/>Desarrollado por SOFORT GmbH');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'iDEAL.nl - pagos en l&iacute;nea para el comercio electr&oacute;nico en los Pa&iacute;ses Bajos. Para el pago por iDEAL necesitas una cuenta en uno de los bancos listados. Ellos har&aacute;n la transferencia directamente a su banco. Los servicios / mercanc&iacute;as se entregan o env&iacute;an cuando est&aacute;n disponibles INMEDIATAMENTE!');

// checkout
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Information\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>pagos en l&iacute;nea para el comercio electr&oacute;nico en los Pa&iacute;ses Bajos</li>
    <li>Para el pago por iDEAL necesita una cuenta en uno de los bancos listados</li>
    <li>Har&aacute;n la transferencia directamente a su banco</li>
    <li>Los servicios / bienes se entregan o env&iacute;an cuando est&aacute;n disponibles INMEDIATAMENTE</li>
  </ul>');

define('MODULE_PAYMENT_'.$sofort_code.'_SELECTBOX', 'Por favor, elija su banco');

// admin
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'activar el m&oacute;dulo iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Activa/desactiva iDeal');

include(DIR_FS_CATALOG.'lang/english/modules/payment/sofort_payment.php');

?>