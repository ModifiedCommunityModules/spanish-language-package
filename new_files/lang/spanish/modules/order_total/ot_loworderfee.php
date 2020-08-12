<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_loworderfee.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_loworderfee.php,v 1.2 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (ot_loworderfee.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_LOWORDERFEE_TITLE', 'Recargo por peque&ntilde;as cantidades');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_DESCRIPTION', 'Recargo por pedidos inferiores al valor m&iacute;nimo del pedido');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_STATUS_TITLE','Mostrar el recargo por cantidad m&iacute;nima');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_STATUS_DESC','&iquest;Le gustar&iacute;a ver el recargo por cantidad m&iacute;nima?');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_SORT_ORDER_TITLE','Orden de clasificaci&oacute;n');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_SORT_ORDER_DESC','Secuencia de visualizaci&oacute;n.');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_LOW_ORDER_FEE_TITLE','Permitir el recargo por peque&ntilde;as cantidades');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_LOW_ORDER_FEE_DESC','&iquest;Le gustar&iacute;a permitir un recargo por cantidad m&iacute;nima?');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER_TITLE','Recargo por pedidos bajo');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER_DESC','Se a&ntilde;adir&aacute; un recargo para los pedidos por debajo de este valor.');

  define('MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER_INTERNATIONAL_TITLE','Recargo para los pedidos internacionales en virtud de');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER_INTERNATIONAL_DESC','Se a&ntilde;adir&aacute; un recargo para los pedidos internacionales por debajo de este valor.');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_FEE_TITLE','Suplemento');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_FEE_DESC','Recargo por peque&ntilde;as cantidades.');

  define('MODULE_ORDER_TOTAL_LOWORDERFEE_FEE_INTERNATIONAL_TITLE','Adjudicaci&oacute;n internacional de contratos');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_FEE_INTERNATIONAL_DESC','Recargo por peque&ntilde;as cantidades Internacional.');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_DESTINATION_TITLE','Calcular el recargo por cantidad m&iacute;nima seg&uacute;n las zonas');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_DESTINATION_DESC','Recargo por cantidad m&iacute;nima para los pedidos enviados a este lugar.');
  
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_TAX_CLASS_TITLE','Clase de impuestos');
  define('MODULE_ORDER_TOTAL_LOWORDERFEE_TAX_CLASS_DESC','Utilice la siguiente clase de impuestos para el recargo por cantidad m&iacute;nima.');
?>