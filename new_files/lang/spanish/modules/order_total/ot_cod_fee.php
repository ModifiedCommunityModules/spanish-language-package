<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_cod_fee.php 10553 2017-01-11 13:45:14Z web28 $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers ; http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Gastos reembolso');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'C&aacute;lculo de la tasa de reembolso');

  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE','Gastos reembolso');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC','C&aacute;lculo de tasa de reembolso');

  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE','Ordenaci&oacute;n de datos');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC','Orden de visualizaci&oacute;n');

  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE','Tipo de impuesto');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC','Elige un tipo de impuesto.');

  function define_shipping_titles_cod() {
    $module_keys = str_replace('.php','',MODULE_SHIPPING_INSTALLED);
    $installed_shipping_modules = explode(';',$module_keys);
    //support for ot_shipping
    $installed_shipping_modules[] = 'free';

    if (count($installed_shipping_modules) > 0) {
      foreach($installed_shipping_modules as $shipping_code) {
        $module_type = 'shipping';
        $file = $shipping_code.'.php';
        $shipping_code = strtoupper($shipping_code);
        $title = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'german/modules/' . $module_type . '/' . $file)) {
            include_once(DIR_FS_LANGUAGES . 'german/modules/' . $module_type . '/' . $file);
            $title = constant('MODULE_SHIPPING_'.$shipping_code.'_TEXT_TITLE');
        }
        //support for ot_shipping
        $title = $shipping_code == 'FREE' ? 'Sin gasto de transporte (Sumario del m&oacute;dulo ot_shipping)' : $title;
        
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_TITLE',$title);
        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_DESC','&lt;ISO2-Code&gt;:&lt;Preis&gt;, ....<br />
        00, ya que el c&oacute;digo ISO2 permite la entrega contra reembolso a todos los pa&iacute;ses. Si
        Se utiliza el 00, este debe ser introducido como &uacute;ltimo argumento. Si
        no 00:9.99 se ingresa, no se cobra el env&iacute;o en efectivo al extranjero
        (no es posible). Excluir un solo pa&iacute;s, sin costo para este pa&iacute;s
        entrar. Ejemplo: DE:4.00,CH:,00:9.99<br />-&gt; Explicaci&oacute;n: Env&iacute;o a DE: 4&euro; /
        Env&iacute;o a CH: no es posible / Env&iacute;o al resto del mundo: 9,99&euro;');
      }
    }
  }
  define_shipping_titles_cod();
?>