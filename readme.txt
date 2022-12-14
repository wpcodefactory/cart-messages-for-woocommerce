=== Cart Messages for WooCommerce ===
Contributors: wpcodefactory, algoritmika, anbinder
Tags: woocommerce, cart, checkout, messages, notices, notifications, message, notice, notification, cart notices, cart messages, cart notifications, checkout notices, checkout messages, checkout notifications, woo commerce
Requires at least: 4.4
Tested up to: 6.1
Stable tag: 1.4.0
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add and customize WooCommerce cart and checkout notices.

== Description ==

The **Cart Messages for WooCommerce** plugin lets you add and customize cart and checkout notices in WooCommerce.

### &#9989; Main Features ###

* Add custom notices to the **cart** page.
* Add custom notices to the **checkout** page.
* Customize **add to cart** notices.
* Use the plugin's shortcodes in notices. For example, display the current cart total.
* And more...

### &#127942; Premium Version ###

The free plugin version is limited to one notice on the cart page and one on the checkout page. [Cart Messages for WooCommerce Pro](https://wpfactory.com/item/cart-messages-for-woocommerce/) allows you to add an unlimited number of notices.

### &#128472; Feedback ###

* We are open to your suggestions and feedback. Thank you for using or trying out one of our plugins!
* [Visit plugin site](https://wpfactory.com/item/cart-messages-for-woocommerce/).

== Installation ==

1. Upload the entire plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Start by visiting plugin settings at "WooCommerce > Settings > Cart Messages".

== Changelog ==

= 1.4.0 - 16/11/2022 =
* Dev - Plugin is initialized on the `plugins_loaded` action now.
* Dev - Code refactoring.
* Tested up to: 6.1.
* WC tested up to: 7.1.
* Readme.txt updated.
* Deploy script added.

= 1.3.0 - 11/05/2021 =
* Dev - Visibility - URL param - Sanitizing URL param value now.
* Free plugin version released.
* WC tested up to: 5.2.

= 1.2.0 - 02/04/2021 =
* Dev - Shortcodes - `[alg_wc_cm_product_quantities]` shortcode added.
* Dev - Shortcodes - `[alg_wc_cm_product_titles]` shortcode added.
* Dev - Shortcodes - `[alg_wc_cm_cart_function]` shortcode added.
* Dev - Shortcodes - `as_price` attribute removed; `format` attribute added (e.g. `format="wc_price"`).
* Dev - Localisation - `load_plugin_textdomain()` function moved to the `init` hook.
* Dev - Settings - Properly sanitizing all message texts input now.
* Dev - Settings - Descriptions updated.
* Dev - Code refactoring.
* WC tested up to: 5.1.
* Tested up to: 5.7.

= 1.1.0 - 13/11/2019 =
* Dev - Cart/Checkout Messages - "Visibility" options added.
* Dev - Add to Cart Messages - "Custom text" options added.
* Dev - Code refactoring.
* WC tested up to: 3.8.
* Tested up to: 5.3.

= 1.0.1 - 25/06/2019 =
* Dev - Cart/Checkout Messages - "Type `on_empty`" options added.
* Dev - Shortcodes - `multiply_by` attribute added.
* Dev - Minor code refactoring.

= 1.0.0 - 20/06/2019 =
* Initial Release.

== Upgrade Notice ==

= 1.0.0 =
This is the first release of the plugin.
