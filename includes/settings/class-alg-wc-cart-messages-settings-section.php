<?php
/**
 * Cart Messages for WooCommerce - Section Settings
 *
 * @version 1.6.0
 * @since   1.0.0
 *
 * @author  Algoritmika Ltd
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Alg_WC_Cart_Messages_Settings_Section' ) ) :

class Alg_WC_Cart_Messages_Settings_Section {

	/**
	 * id.
	 *
	 * @version 1.6.0
	 * @since   1.6.0
	 */
	public $id;

	/**
	 * desc.
	 *
	 * @version 1.6.0
	 * @since   1.6.0
	 */
	public $desc;

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		add_filter( 'woocommerce_get_sections_alg_wc_cart_messages',              array( $this, 'settings_section' ) );
		add_filter( 'woocommerce_get_settings_alg_wc_cart_messages_' . $this->id, array( $this, 'get_settings' ), PHP_INT_MAX );
	}

	/**
	 * settings_section.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function settings_section( $sections ) {
		$sections[ $this->id ] = $this->desc;
		return $sections;
	}

}

endif;
