<?php
/* --------------------------------------------------------------
   $Id: stats_sales_report.php 1311 2005-10-18 12:30:40Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(stats_sales_report.php,v 1.6 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (stats_sales_report.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
 

define('REPORT_DATE_FORMAT', 'd. m. Y');

define('HEADING_TITLE', 'Resumen de ventas');

define('REPORT_SALES_STATISTICS', 'Filtro de estad&iacute;sticas de ventas');
define('REPORT_TYPE_YEARLY', 'Anual');
define('REPORT_TYPE_MONTHLY', 'Mensual');
define('REPORT_TYPE_WEEKLY', 'Semanal');
define('REPORT_TYPE_DAILY', 'Diario');
define('REPORT_START_DATE', 'Fecha - Desde');
define('REPORT_END_DATE', 'Fecha - Hasta (inclusive)');
define('REPORT_DETAIL', 'Detalles');
define('REPORT_MAX', 'Mostrar los mejores');
define('REPORT_ALL', 'Todos');
define('REPORT_SORT', 'Clasificaci&oacute;n');
define('REPORT_EXP', 'Exportar');
define('REPORT_SEND', 'Enviar');
define('EXP_NORMAL', 'Normal');
define('EXP_HTML', 'Solo HTML');
define('EXP_CSV', 'CSV');

define('TABLE_HEADING_DATE', 'Fecha');
define('TABLE_HEADING_ORDERS', '# Pedidos');
define('TABLE_HEADING_ITEMS', '# Art&iacute;culos');
define('TABLE_HEADING_REVENUE', 'Volumen ventas');
define('TABLE_HEADING_SHIPPING', 'Gastos de env&iacute;o');

define('DET_HEAD_ONLY', 'S&iacute;n detalles');
define('DET_DETAIL', 'Mostrar detalles');
define('DET_DETAIL_ONLY', 'Detalles con imoporte');

define('SORT_VAL0', 'Estandar');
define('SORT_VAL1', 'Descripci&oacute;n');
define('SORT_VAL2', 'Descripci&oacute;n desde fecha');
define('SORT_VAL3', '# Art&iacute;culos');
define('SORT_VAL4', '# Art&iacute;culos desde fecha');
define('SORT_VAL5', 'Facturaci&oacute;n');
define('SORT_VAL6', 'Facturaci&oacute;n desde fecha');

define('REPORT_STATUS_FILTER', 'Estado');
define('REPORT_PAYMENT_FILTER','Forma de pago');

define('SR_SEPARATOR1', ';');
define('SR_SEPARATOR2', ';');
define('SR_NEWLINE', '<br />');
?>