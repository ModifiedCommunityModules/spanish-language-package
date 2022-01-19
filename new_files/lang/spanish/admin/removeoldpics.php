<?php
/* --------------------------------------------------------------
   $Id: removeoldpics.php 3503 2012-08-23 11:24:07Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(manufacturers.php,v 1.14 2003/02/16); www.oscommerce.com
   (c) 2003 nextcommerce (manufacturers.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Eliminar las fotos de los art&iacute;culos antiguos');
define('LINK_INFO_TEXT', '<p>Usando esta funci&oacute;n se pueden eliminar las im&aacute;genes de art&iacute;culos superfluos en los directorios:</p>
- /images/product_images/info_images<br/>
- /images/product_images/original_images<br/>
- /images/product_images/popup_images<br/>
- /images/product_images/thumbnail_images<br/>
<p>puede ser eliminada del servidor web si ya no hay ninguna referencia a estas im&aacute;genes de art&iacute;culos en la base de datos.<br/> Si una imagen ya no es utilizada por ning&uacute;n producto, la imagen puede ser eliminada de forma segura del servidor web.</p><br/>');
define('LINK_ORIGINAL', 'Eliminar las viejas fotos originales');
define('LINK_INFO', 'Eliminar las viejas im&aacute;genes de informaci&oacute;n');
define('LINK_MIDI', 'Eliminar im&aacute;genes midi antiguas');
define('LINK_THUMBNAIL', 'Eliminar las viejas im&aacute;genes en miniatura');
define('LINK_POPUP', 'Borrar viejas fotos popup');
define('LINK_MINI', 'Eliminar las mini im&aacute;genes antiguas');
define('LINK_MESSAGE', 'Las im&aacute;genes superfluas de art&iacute;culos del directorio "/images/product_images/%s_images" han sido eliminadas.');
define('LINK_MESSAGE_NO_DELETE', 'No se encontraron im&aacute;genes de art&iacute;culos innecesarios en el directorio "/images/product_images/%s_images".');
?>