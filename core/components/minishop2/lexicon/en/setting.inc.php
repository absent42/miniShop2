<?php
/**
 * Settings English Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */
$_lang['area_ms2_category'] = 'Category for products';
$_lang['area_ms2_product'] = 'Product';
$_lang['area_ms2_gallery'] = 'Gallery';
$_lang['area_ms2_cart'] = 'Cart';
$_lang['area_ms2_order'] = 'Order';
$_lang['area_ms2_frontend'] = 'Frontend';
$_lang['area_ms2_payment'] = 'Payments';

$_lang['setting_ms2_category_grid_fields'] = 'Fields in the products table of the category view';
$_lang['setting_ms2_category_grid_fields_desc'] = 'Comma separated list of visible fields in the table of goods in category.';
$_lang['setting_ms2_product_main_fields'] = 'Main fields in the panel of a product';
$_lang['setting_ms2_product_main_fields_desc'] = 'Comma separated list of visible fields in the panel of a product. e.g. "pagetitle,longtitle,content".';
$_lang['setting_ms2_product_extra_fields'] = 'Extra fields for display in the panel of a product';
$_lang['setting_ms2_product_extra_fields_desc'] = 'Comma separated list of visible fields in the extened panel of a product. e.g. "price,old_price,weight".';

$_lang['setting_ms2_category_show_comments'] = 'Display comments on the category';
$_lang['setting_ms2_category_show_comments_desc'] = 'Display comments for all goods from category if component "Tickets" is installed.';
$_lang['setting_ms2_category_show_nested_products'] = 'Show nested product in the category';
$_lang['setting_ms2_category_show_nested_products_desc'] = 'If set to true, you will see all nested products of category. They will have another color and name of their category below pagetitle.';
$_lang['setting_ms2_category_remember_tabs'] = 'Remember category active tab';
$_lang['setting_ms2_category_remember_tabs_desc'] = 'If true, active tab of category panel will be remembered and restored on reload page.';
$_lang['setting_ms2_category_id_as_alias'] = 'Use ID of category as alias';
$_lang['setting_ms2_category_id_as_alias_desc'] = 'If true, aliases for friendly urls of categories will be generated. ID will be set as alias.';
$_lang['setting_ms2_category_content_default'] = 'Default content of category';
$_lang['setting_ms2_category_content_default_desc'] = 'Here you can specify the default content of new category. By default it lists child products.';
$_lang['setting_ms2_product_show_comments'] = 'Display comments for the product';
$_lang['setting_ms2_product_show_comments_desc'] = 'Display comments for the product if component "Tickets" is installed.';
$_lang['setting_ms2_template_product_default'] = 'Default template for new product';
$_lang['setting_ms2_template_product_default_desc'] = 'Select template which will be set by default when you creating a new product.';
$_lang['setting_ms2_product_show_in_tree_default'] = 'Show in tree by default';
$_lang['setting_ms2_product_show_in_tree_default_desc'] = 'If you activate this option, all new goods will be shown in resource tree.';
$_lang['setting_ms2_product_source_default'] = 'Default media source';
$_lang['setting_ms2_product_source_default_desc'] = 'Default media source for the product gallery.';
$_lang['setting_ms2_product_vertical_tabs'] = 'Vertical tabs at product page';
$_lang['setting_ms2_product_vertical_tabs_desc'] = 'How to display product page in manager. Disabling this option allows you to fit the product page on the screen with a small horizontal size. Not recommended.';
$_lang['setting_ms2_product_remember_tabs'] = 'Remember active product tab';
$_lang['setting_ms2_product_remember_tabs_desc'] = 'If true, active tab of product panel will be remembered and restored on reload page.';
$_lang['setting_ms2_product_thumbnail_size'] = 'Default thumbnail size';
$_lang['setting_ms2_product_id_as_alias'] = 'Use ID of product as alias';
$_lang['setting_ms2_product_id_as_alias_desc'] = 'If true, aliases for friendly urls of products will don be generated. ID will be set as alias.';
$_lang['setting_ms2_product_thumbnail_size_desc'] = 'Size of default pre-generated thumbnail for field "thumb" in msProduct table. Be sure to specify this size in JSON array settings of the MS2 media source which generates the thumbnails. Otherwise you will get the miniShop2 logo instead of the product image in the manager.';
$_lang['ms2_source_thumbnails_desc'] = 'JSON encoded array of options for generating thumbnails.';

$_lang['setting_ms2_cart_handler_class'] = 'Cart handler class';
$_lang['setting_ms2_cart_handler_class_desc'] = 'The name of the class that implements the logic for the cart.';
$_lang['setting_ms2_order_handler_class'] = 'Order handler class';
$_lang['setting_ms2_order_handler_class_desc'] = 'The name of the class that implements the logic for order processing.';
$_lang['setting_ms2_order_user_groups'] = 'Groups for registering customers';
$_lang['setting_ms2_order_user_groups_desc'] = 'Comma-separated list of user groups for adding new users to when they place an order.';
$_lang['setting_ms2_email_manager'] = 'Managers mailboxes';
$_lang['setting_ms2_email_manager_desc'] = 'Comma-separated list of mailboxes of managers, for sending notifications about changes to the status of orders';
$_lang['setting_ms2_date_format'] = 'Format of dates';
$_lang['setting_ms2_date_format_desc'] = 'You can specify how to format miniShop2 dates using php strftime() syntax. By default format is "%d.%m.%y %H:%M".';
$_lang['setting_ms2_price_format'] = 'Format of prices';
$_lang['setting_ms2_price_format_desc'] = 'You can specify, how to format prices of product by function number_format(). For this use a JSON string with an array of 3 values: number of decimals, decimals separator and thousands separator. By default format is [2,"."," "], that transforms "15336.6" into "15 336.60"';
$_lang['setting_ms2_price_format_no_zeros'] = 'Remove extra zeros in the prices';
$_lang['setting_ms2_price_format_no_zeros_desc'] = 'By default, weight of goods shown with 2 decimals: "15.20". If enabled this option, extra zeroes at the end will removed and price transforms to "15.2"';
$_lang['setting_ms2_weight_format'] = 'Format of weight';
$_lang['setting_ms2_weight_format_desc'] = 'You can specify, how to format weight of product by function number_format(). For this use a JSON string with an array of 3 values: number of decimals, decimals separator and thousands separator. By default format is [3,"."," "], that transforms "141.3" into "141.300"';
$_lang['setting_ms2_weight_format_no_zeros'] = 'Remove extra zeros in the weight';
$_lang['setting_ms2_weight_format_no_zeros_desc'] = 'By default, weight of goods shown with 3 decimals: "15.250". If enabled this option, extra zeroes at the end will removed and weight transforms to "15.25".';
$_lang['setting_ms2_price_snippet'] = 'Price modifier';
$_lang['setting_ms2_price_snippet_desc'] = 'You can specify an existing snippet for modification of product price when displayed on the front-end and when adding to the cart. This snippet must receive object "$product" and return integer.';
$_lang['setting_ms2_weight_snippet'] = 'Weight modifier';
$_lang['setting_ms2_weight_snippet_desc'] = 'You can specify an existing snippet for modification of product weightwhen displayed on the front-end and when adding to the cart. This snippet must receive object "$product" and return integer.';

$_lang['setting_ms2_frontend_css'] = 'Frontend styles';
$_lang['setting_ms2_frontend_css_desc'] = 'Path to file with styles of the shop. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.';
$_lang['setting_ms2_frontend_js'] = 'Frontend scripts';
$_lang['setting_ms2_frontend_js_desc'] = 'Path to file with scripts of the shop. If you want to use your own scripts - specify them here, or clean this parameter and load them in site template.';

$_lang['setting_ms2_payment_paypal_api_url'] = 'PayPal API URL';
$_lang['setting_ms2_payment_paypal_checkout_url'] = 'PayPal checkout URL';
$_lang['setting_ms2_payment_paypal_currency'] = 'PayPal currency';
$_lang['setting_ms2_payment_paypal_user'] = 'PayPal user';
$_lang['setting_ms2_payment_paypal_pwd'] = 'PayPal password';
$_lang['setting_ms2_payment_paypal_signature'] = 'PayPal signature';
$_lang['setting_ms2_payment_paypal_success_id'] = 'PayPal successful page ID (usually set to cart ID)';
$_lang['setting_ms2_payment_paypal_cancel_id'] = 'PayPal cancel page ID';
$_lang['setting_ms2_payment_paypal_cancel_order'] = 'PayPal cancel order';
$_lang['setting_ms2_payment_paypal_cancel_order_desc'] = 'If true, order will be cancelled if customer cancel payment.';
