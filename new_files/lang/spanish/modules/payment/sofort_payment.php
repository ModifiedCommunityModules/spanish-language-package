<?php
/* -----------------------------------------------------------------------------------------
   $Id: sofort_payment.php 11651 2019-03-28 17:10:07Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
 	 based on:
	  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	  (c) 2002-2003 osCommerce - www.oscommerce.com
	  (c) 2001-2003 TheMedia, Dipl.-Ing Thomas Pl�nkers - http://www.themedia.at & http://www.oscommerce.at
	  (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com
    (c) 2010 Payment Network AG - http://www.payment-network.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'Online Bank Transfer.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', 'Online Bank Transfer. es el m&eacute;todo de pago gratuito y certificado por el T&Uuml;V de SOFORT GmbH.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'Puede pagar con el sistema bancario en l&iacute;nea certificado por el T&Uuml;V  Online Bank Transfer. de SOFORT GmbH.');

// checkout
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'https://images.sofort.com/en/su/landing.php\',\'Customerinformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Online Bank Transfer.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Simple y seguro.</li>
  </ul>');

// admin
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Activar Online Bank Transfer.');
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Activa/desactiva Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_DESC', 'Por favor, introduzca <b>por separado</b> las zonas que deben estar permitidas para este m&oacute;dulo. (por ejemplo, permitir AT, DE (si est&aacute; vac&iacute;o, todas las zonas))');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_TITLE', 'Orden temporal');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_DESC', '&iquest;Quieres crear una orden temporal?');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_TITLE', 'Activar el registro');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_DESC', 'Activa/desactiva el registro<br/>Los archivos de registro se guardan en /log');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_TITLE', 'Configurationkey');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_DESC', 'Configurationkey se puede encontrar en Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_TITLE', 'Orden de exhibici&oacute;n');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_DESC', 'Orden de exhibici&oacute;n. El n&uacute;mero m&aacute;s peque&ntilde;o se muestra primero');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_DESC', 'Si se selecciona una zona, el m&eacute;todo de pago es v&aacute;lido s&oacute;lo para esa zona.');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_TITLE', 'Moneda de transacci&oacute;n');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_DESC', 'Recepci&oacute;n de moneda Online Bank Transfer. escenario');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_TITLE', 'Orden Confirmada');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_DESC', 'El estado del pedido despu&eacute;s de la recepci&oacute;n de un pedido, fue enviado antes de una confirmaci&oacute;n de pago exitosa');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_TITLE', 'Estado de la orden temporal');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_DESC', 'Orden para las transacciones a&uacute;n no completadas');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_TITLE', 'Para comprobar el estado del pedido');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_DESC', 'El estado del pedido se ha recibido en una confirmaci&oacute;n de pago incorrecta tras la recepci&oacute;n de un pedido');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_TITLE', 'Estado del pedido despu&eacute;s del pago');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_DESC', 'Estado del pedido despu&eacute;s de que el dinero se haya acreditado en su cuenta.');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_TITLE', 'Estado del pedido despu&eacute;s de la devoluci&oacute;n del cargo');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_DESC', 'Estado de la orden despu&eacute;s de que se haya producido una devoluci&oacute;n de cargo.');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_TITLE', 'Estado del pedido si no ha llegado el dinero');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_DESC', 'Estado del pedido si no se acredita dinero en su cuenta.');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_TITLE', 'L&iacute;nea de uso 1');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_DESC', 'Si no se crea una orden temporal, el n&uacute;mero de orden no est&aacute; disponible. Por lo tanto, debe ser colocado en -TRANSACCI&oacute;N-');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_TITLE', 'L&iacute;nea de uso 2');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_DESC', 'En uso (m&aacute;ximo 27 caracteres) que se sustituir&aacute; por los siguientes marcadores de posici&oacute;n:<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_TITLE', 'Pago Gr&aacute;fico / Texto');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_DESC', 'Gr&aacute;fico / Texto en el pago de la factura');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_TITLE', 'Protecci&oacute;n al cliente activada');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_DESC', 'Activar la protecci&oacute;n del cliente para Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_TITLE', 'N&uacute;mero de cliente');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_DESC', 'N&uacute;mero de cliente en Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_TITLE', 'N&uacute;mero de proyecto');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_DESC', 'El n&uacute;mero de proyecto responsable en el uso de navegaci&oacute;n inmediata Online Bank Transfer. al pago pertenece');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_TITLE', 'Contrase&ntilde;a del proyecto');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_DESC', 'Encuentra esto en Ajustes en Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_TITLE', 'Notificaci&oacute;n Contrase&ntilde;a');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_DESC', 'Encuentra esto en Ajustes en Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_TITLE', 'Hash-Algorithmus:');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_DESC', 'Encuentra esto en Ajustes en at Online Bank Transfer.');
define('MODULE_PAYMENT_'.$sofort_code.'_DESCRIPTION_INSTALL', '<br/><br/>&iquest;Quieres instalar el estado de pedido adecuado?<br/>Los estados actualmente establecidos se sobrescriben.');

// status
defined('TEXT_NO_STATUSUPDATE') OR define('TEXT_NO_STATUSUPDATE', 'no hay actualizaci&oacute;n de estado');

// error
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_HEADING', 'Durante el proceso se inform&oacute; del siguiente error:');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_MESSAGE', 'El pago no es posible o ha sido cancelado por el cliente. Por favor, seleccione otro m&eacute;todo de pago.');

// callback
defined('TEXT_SOFORT_NOT_CREDITED_YET') OR define('TEXT_SOFORT_NOT_CREDITED_YET', 'Completado con &eacute;xito Online Bank Transfer.');
defined('TEXT_SOFORT_NOT_CREDITED') OR define('TEXT_SOFORT_NOT_CREDITED', 'No se ha recibido dinero en la cuenta');
defined('TEXT_SOFORT_LOSS') OR define('TEXT_SOFORT_LOSS', 'verificar la orden');
defined('TEXT_SOFORT_RECEIVED') OR define('TEXT_SOFORT_RECEIVED', 'Recibi&oacute; dinero a cuenta');
defined('TEXT_SOFORT_CREDITED') OR define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED') OR define('TEXT_SOFORT_REFUNDED', 'El dinero fue devuelto en su totalidad');
defined('TEXT_SOFORT_CANCELED') OR define('TEXT_SOFORT_CANCELED', 'Online Bank Transfer. cancelado');
defined('TEXT_SOFORT_WAIT_FOR_MONEY') OR define('TEXT_SOFORT_WAIT_FOR_MONEY', 'Esperando el pago');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') OR define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Online Bank Transfer. Tiempo de espera');
defined('TEXT_SOFORT_REJECTED') OR define('TEXT_SOFORT_REJECTED', 'Online Bank Transfer. rechazado');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED') OR define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);

define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_TRANSACTION', "Error durante la notificaci&oacute;n HTTP\nPor favor, compruebe la transacci&oacute;n y la notificaci&oacute;n\nTransacci&oacute;n-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_PAYMENT', "Dinero NO recibido todav&iacute;a\nTransacci&oacute;n-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_UNEXPECTED_STATUS', "Error (SU204): Estado inesperado\nTransacci&oacute;n-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_TRANSACTION', "El pago ha sido exitoso\nTransacci&oacute;n-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_PAYMENT', "Dinero recibido\nTransacci&oacute;n-ID: %s");

// order status
$SOFORT_INST_ORDER_STATUS_TMP_NAME = 'Temp';
$SOFORT_INST_ORDER_STATUS_UNC_NAME = 'Esperando';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME = 'Esperando';
$SOFORT_INST_ORDER_STATUS_REC_NAME = 'Recibido el pago';
$SOFORT_INST_ORDER_STATUS_REF_NAME = 'Reembolsado';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Pago';
?>