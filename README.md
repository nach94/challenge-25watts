# DESARROLLO DE SITIO WEB E-COMMERCE (Challenge) - [25Watts](https://www.25watts.com.ar/)

![Pagina de inicio de NINA](https://helloeveryone.me/wp-content/uploads/Pagina-de-inicio.jpg)

***
**Deploy temporal para visulización en vivo** ---> [Accede al siguiente link](https://www.25watts.com.ar/)
***
## Requerimientos de entrega:

| Requerimiento      | Detalle |
|--------------------|----------|
| Fecha de Entrega   | 5 días hábiles luego de su envío.   |
| Formato de entrega  | Repositorio público en Github / Bitbucket o Archivo ZIP (con archivos y Backup SQL DB). |
| Prototipo de sitio | [Diseño en Figma](https://www.figma.com/file/xefPwnJQ2itWxrXjBYmfEp/Developer_Challenge_25Watts?type=design&node-id=6%3A2655&mode=dev&t=9Kv6C2nAuFTkwwfv-1) |


## Requerimientos de desarrollo:

| Debe incluir mínimamente |
|------------------------------|
| Navbar / Menu Principal   |
| Sección Home / Inicio |
|Banners de categorias | 
|Sección productos|
|Detalle del producto|
|Formulario de contacto|
|Footer|


| Se valorará |
|------------------------------|
| Diseño Mobile   |
| Integración recaptcha, social login, Payment (Mercado Pago, MODO, ClickPago, etc), Shipping (Andreani, OCA, Correo Argentino, etc) |
|Integración GTM para seguimiento de Google / Facebook. | 
|Integración Google Maps|
|SEO|

## Tecnologías para el desarrollo.

### Plantilla

![Plantilla Hello Theme](https://elementor.com/cdn-cgi/image/f=auto,w=1200/https://elementor.com/blog/wp-content/uploads/2019/05/Hello-Theme_fb-1.png)

| Plantilla     | Licencia |
|--------------------|----------|
| Hello Theme  | Licencia Gratuita   |

***

### Plugins

![Plugins utilizados](https://helloeveryone.me/wp-content/uploads/Plugins.jpg)

| Nombre del plugin     | Licencia | Web del plugin |
|--------------------|----------|----------|
| WP Cerber | Licencia Gratuita   | [Visitar web del plugin](https://wpcerber.com/)   |
| Code Snippets | Licencia Gratuita   | [Visitar web del plugin](https://es.wordpress.org/plugins/code-snippets/)   |
| Elementor | Licencia Gratuita   |[Visitar web del plugin](https://es.wordpress.org/plugins/elementor/)  |
| JetBlocks | GPL-V3  |[Visitar web del plugin](https://crocoblock.com/plugins/jetblocks/)   |
| JetEngine | GPL-V3    |[Visitar web del plugin](https://crocoblock.com/plugins/jetengine/)   |
| JetPopup | GPL-V3   |[Visitar web del plugin](https://crocoblock.com/plugins/jetpopup/)   |
| JetProductGallery | GPL-V3    |[Visitar web del plugin](https://crocoblock.com/plugins/jetproductgallery/)   |
| JetSmartFilters | GPL-V3    |[Visitar web del plugin](https://crocoblock.com/plugins/jetsmartfilters/)   |
| JetWooBuilder | GPL-V3   |[Visitar web del plugin](https://crocoblock.com/plugins/jetwoobuilder/)  |
| Loco Translate | Licencia Gratuita   |[Visitar web del plugin](https://es.wordpress.org/plugins/loco-translate/)  |
| PRO Elements | Licencia Gratuita   |[Visitar web del plugin](https://proelements.org/)   |
| Rank Math SEO | Licencia Gratuita   |[Visitar web del plugin](https://es.wordpress.org/plugins/seo-by-rank-math/)   |
| Safe SVG | Licencia Gratuita   |[Visitar web del plugin](https://wordpress.org/plugins/safe-svg/)   |
| Variation Swatches for WooCommerce | Licencia Gratuita   |[Visitar web del plugin](https://wordpress.org/plugins/woo-variation-swatches/)  |
| WooCommerce | Licencia Gratuita   |[Visitar web del plugin](https://es.wordpress.org/plugins/woocommerce/)   |
| LiteSpeed Caché | Licencia Gratuita |[Visitar web del plugin](https://wordpress.org/plugins/litespeed-cache/) |
| WPC AJAX Add to Cart for WooCommerce| Licencia Gratuita   |[Visitar web del plugin](https://wordpress.org/plugins/wpc-ajax-add-to-cart/)   |

***

### Snippets Personalizados

![Snippets Personalizados](https://helloeveryone.me/wp-content/uploads/Snippets-Personalizados.jpg)

Para ampliar la funcionalidad de algunos componentes y lograr de que el sitio logre ser lo más fidedigno posible al diseño del prototipo, fue necesario incluir algunas funciones personalizadas.

| Nombre del snippet   | Funcionalidad                                  | Link al repositorio |
|----------------------|------------------------------------------------|---------------------|
| AÑO ACTUAL           | Imprime el año actual en el footer del sitio.  |  [Ver](https://github.com/nach94/wordpress-code-snippets/tree/main/signature-with-current-year)  |
| PROD COUNT           | Imprime la cantidad de productos añadidos al carrito. Funciona con Ajax.  |  [Ver](https://github.com/nach94/wordpress-code-snippets/tree/main/products-cart-counter)  |
| ADD TO CART - INPUT           | Modifica el input de tipo "number" para seleccionar la cantidad de productos  |  [Ver](https://github.com/nach94/wordpress-code-snippets/tree/main/plus-minus-add-to-cart)  |
| SHOW VARIATIONS IN SHOP PAGE      | Muestra las variaciones del producto en el archivo de productos del sitio |  [Ver](https://github.com/nach94/wordpress-code-snippets/tree/main/show-variations-in-archive-page)  |
| WPP FORM          | Formulario de contacto para enviar mensajes por WhatsApp escribiendo el texto en un "textarea"  |  [Ver](https://github.com/nach94/whatsapp-form)  |

***

### CPT adicionales para administrar contenidos.

Estos Custom Post Types fueron creados con el motivo de poder administrar todo el contenido del sitio web de forma dinamica, sin necesidad de recurrir a la intervención estructural de la misma.

| Nombre     | Descripción      |
|------------|----------|
| Sliders       | Es un Custom Post Type creado en el backend de Wordpress para poder administrar el contenido de los sliders de la home. |
| Sucursales      | Es un Custom Post Type creado en el backend de Wordpress para poder administrar el contenido y los datos de las sucursales de la marca, cambiar los horarios y direcciones, etc. |

***

### Páginas de opciones adicionales.

Las páginas de opciones son excelentes para ofrecer al cliente un lugar donde pueda actualizar o configurar datos básicos de sus sitio web, como Teléfonos, WhatsApp, Redes sociales, etc. Datos que también se pueden utilizar como contenido dinámico en el sitio web.

| Nombre     | Descripción      |
|------------|----------|
| Mi Web       | Toda una serie de campos personalizados para que el cliente pueda completar con sus datos básicos. |

## Páginas desarrolladas para el Challenge

| Nombre     | URL      |
|------------|----------|
| HOME       | [Vista previa](https://ninayco.helloeveryone.me/) |
| ARCHIVE DE PRODUCTOS       | [Vista previa](https://ninayco.helloeveryone.me/tienda/) |
| SINGLE DE PRODUCTO     | [Vista previa](https://ninayco.helloeveryone.me/producto/jean-mom-jea987/) |
| TIENDAS       | [Vista previa](https://ninayco.helloeveryone.me/tiendas/) |
| CONTACTO       | [Vista previa](https://ninayco.helloeveryone.me/contacto/) |


