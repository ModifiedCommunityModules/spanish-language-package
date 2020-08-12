<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_payment.php 3481 2012-08-22 07:07:50Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (C) 2007 Estelco - Ebusiness & more - http://www.estelco.de
   (C) 2004 IT eSolutions Andreas Zimmermann - http://www.it-esolutions.de

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=german\', \'Hilfe\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=german"><b>[HILFE]</b></a>');
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT', '<h2>Descuento y recargo en los m&eacute;todos de pago</h2>
Para que sean posibles m&aacute;s niveles de descuento (por defecto son <b>3</b>), el valor de la variable $num (archivos de idioma) o $this-&gt;num (archivo de m&oacute;dulo) debe cambiarse al valor deseado en todos los archivos antes de la instalaci&oacute;n.
<hr>
<h3>Campos de escala de descuento</h3>
<p class="red">Nota: la direcci&oacute;n de entrega es decisiva para los c&oacute;digos de pa&iacute;s. Si se va a aplicar un descuento/recargo a todos los pa&iacute;ses, se debe utilizar 00 como c&oacute;digo o se debe omitir por completo el c&oacute;digo del pa&iacute;s (incluido el &quot;|&quot;)!</p>
<h4>Utilice la siguiente anotaci&oacute;n para los descuentos:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
<p>Significado:</p>
<p>Para los clientes de <span class="blue">Alemania</span> ser&aacute; de <span class="green">100&euro;</span> un descuento de <span class="red">4%</span>, de <span class="green">200&euro;</span> un descuento de <span class="red">5%</span> mantenido.</p>
<pre>   <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
<p>Significado:</p>
<p>Para los clientes de todos los pa&iacute;ses de <span class="green">100&euro;</span> un descuento de <span class="red">2%</span>, de <span class="green">200&euro;</span> un descuento de <span class="red">3%</span> mantenido.</p>
<h4>Utilice la siguiente anotaci&oacute;n para el recargo:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">-3</span></pre>
<p>Significado:</p>
<p>Para los clientes de <span class="blue">Alemania</span> ser&aacute; de <span class="green">100&euro;</span> una prima de <span class="red">3%</span> calculado.</p>
<h4>Ejemplo para Paypal</h4>
1. Escala de descuento
<pre>   <span class="blue">DE</span>|<span class="green">0</span>:<span class="red">-1.9</span>&amp;<span class="lila">-0.35</span></pre>
2. Escala de descuento
<pre>   <span class="blue">00</span>|<span class="green">0</span>:<span class="red">-3.4</span>&amp;<span class="lila">-0.35</span></pre>
<p>Significado:</p>
<p>Para los clientes de <span class="blue">Alemania</span> ser&aacute; de <span class="green">0&euro;</span> (as&iacute; que siempre) una prima de <span class="red">1,9%</span> m&aacute;s <span class="lila">0,35&euro;</span> calculado.</p>
<p>Para los clientes de <span class="blue">todos los dem&aacute;s pa&iacute;ses (00=todos)</span> ser&aacute; de <span class="green">0&euro;</span> una prima de <span class="red">3,4%</span> m&aacute;s <span class="lila">0,35&euro;</span> calculado.</p>
<p>Aqu&iacute; es importante el orden de las entradas (todos los pa&iacute;ses restantes siempre en &uacute;ltimo lugar) y el &quot;c&aacute;lculo m&uacute;ltiple&quot; sobre &quot;falso&quot; de lo contrario se calculan ambos recargos.</p>
<h4>Ejemplo de cantidades fijas</h4>
<pre>   <span class="green">0</span>:<span class="red">0</span>&amp;<span class="lila">-2</span></pre>
<p>Significado:</p>
<p>Para clientes de todos os pa&iacute;ses, &eacute; cobrada uma sobretaxa de <span class="green">0&euro;</span> (ou seja, sempre) de <span class="red">0%</span> (ou seja, sem sobretaxa percentual) mais <span class="purple">2,00&euro;</span> (a sobretaxa fixa).</p>
<hr>
<h3>Campos de tipo de pagamento</h3>
<p>Introduzca el <b>c&oacute;digo interno</b> de la forma de pago en los campos, por ejemplo, <b>moneyorder</b> para pago por adelantado o <b>cod</b> para pago contra reembolso. Separe los m&uacute;ltiples m&eacute;todos de pago con comas</p> Ver M&oacute;dulos -&gt; Opciones de pago -&gt; columna &quot;nombre del m&oacute;dulo (para uso interno)&quot;.<br/><br/>
<hr>
<h3>Visualizaci&oacute;n de la forma de pago en el proceso de pedido</h3>
Si desea que el descuento se muestre durante la selecci&oacute;n de pago en el proceso de pedido, fije la opci&oacute;n &quot;Visualizar en los tipos de pago&quot; a &quot;verdadero&quot;. <br/><br/>
Adem&aacute;s se puede, con la opci&oacute;n &quot;visualizar el tipo en el proceso de pedido en la selecci&oacute;n de pago&quot; establecer el tipo de la representaci&oacute;n:
<p> -- por defecto: porcentaje o importe, seg&uacute;n las entradas de la escala de descuentos</p>
<p> -- precio: La cantidad real siempre se muestra</p>'
);

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Descuento &amp; recargo en los m&eacute;todos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Descuento y recargo en los m&eacute;todos de pago'.MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Muestra el descuento');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', '&iquest;Quiere activar el descuento de la forma de pago?');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Orden de clasificaci&oacute;n');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Secuencia de visualizaci&oacute;n');

for ($j=1; $j<=MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
  define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', '<hr>'.$j . '. Escala de descuento');
  define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Descuento (valor m&iacute;nimo:por ciento)');
  define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. M&eacute;todo de pago');
  define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'M&eacute;todos de pago en los que se har&aacute; el descuento');
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Incluyendo los gastos de env&iacute;o');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Los gastos de env&iacute;o son descontados');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>Incluyendo el IVA');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'Ust est&aacute; rebajado');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Ust c&aacute;lculo');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'recalcular el total de la Ust');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Zonas permitidas');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC' , 'Especifique <b>individual</b> las zonas que deben ser permitidas para este m&oacute;dulo. (por ejemplo AT,DE (si est&aacute; vac&iacute;o, todas las zonas est&aacute;n permitidas))');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Descuento');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Suplemento');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE','<hr>Clase de impuestos');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC','La clase de impuesto no es importante y s&oacute;lo sirve para evitar un mensaje de error.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE','<hr>C&aacute;lculo m&uacute;ltiple');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC','&iquest;Deber&iacute;a ser posible hacer m&uacute;ltiples c&aacute;lculos? Si no, el c&aacute;lculo se termina despu&eacute;s del primer descuento de coincidencia.');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Mostrar en los m&eacute;todos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Visualizaci&oacute;n en el proceso de pedido durante la selecci&oacute;n de pago');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Tipo de visualizaci&oacute;n de las v&iacute;as de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Clase de visualizaci&oacute;n en el proceso de orden durante la selecci&oacute;n de pagos <br />-- por defecto: porcentaje o importe, seg&uacute;n las entradas de la escala de descuentos<br />-- precio: siempre se muestra la cantidad real');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'N&uacute;mero de m&eacute;todos de pago');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'N&uacute;mero de descuento &amp; recargo en los m&eacute;todos de pago');
?>