<?php
/* --------------------------------------------------------------
	payone.php 2013-08-02 mabr
	Gambio GmbH
	http://www.gambio.de
	Copyright (c) 2013 Gambio GmbH
	Released under the GNU General Public License (Version 2)
	[http://www.gnu.org/licenses/gpl-2.0.html]
	--------------------------------------------------------------


	based on:
	(c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	(c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
	(C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers ; http://www.themedia.at & http://www.oscommerce.at
	(c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: ot_cod_fee.php 1003 2005-07-10 18:58:52Z mz $)

	Released under the GNU General Public License
	---------------------------------------------------------------------------------------*/

//define('MODULE_PAYMENT_PAYONE_TEXT_TITLE', 'PayOne');
//define('MODULE_PAYMENT_PAYONE_TEXT_DESCRIPTION', 'PayOne lorem ipsum');
//define('MODULE_PAYMENT_PAYONE_TEXT_INFO', 'PayOne ...');
define('MODULE_PAYMENT_PAYONE_STATUS_TITLE', 'Habilitar el m&oacute;dulo');
define('MODULE_PAYMENT_PAYONE_STATUS_DESC', '&iquest;Quiere aceptar pagos a trav&eacute;s de este m&oacute;dulo?');
define('MODULE_PAYMENT_PAYONE_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_PAYONE_ALLOWED_DESC', 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT,DE (dejar vac&iacute;o si desea permitir todas las zonas))');
define('MODULE_PAYMENT_PAYONE_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_PAYONE_ZONE_DESC', 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.');
define('MODULE_PAYMENT_PAYONE_TMPORDER_STATUS_ID_TITLE', 'Estado de la orden temporal');
define('MODULE_PAYMENT_PAYONE_TMPORDER_STATUS_ID_DESC', 'Orden para las transacciones a&uacute;n no completadas');
define('MODULE_PAYMENT_PAYONE_ORDER_STATUS_ID_TITLE', 'Establecer el estado de la orden');
define('MODULE_PAYMENT_PAYONE_ORDER_STATUS_ID_DESC', 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor');
define('MODULE_PAYMENT_PAYONE_SORT_ORDER_TITLE', 'Orden de clasificaci&oacute;n');
define('MODULE_PAYMENT_PAYONE_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_PAYONE_LP', '<br/><br/><a target="_blank" href="https://www.payone.com/en/plattform-integration/extensions/modified-shop/"><strong>Crea una cuenta de PAYONE aqu&iacute; ahora.</strong></a>');
