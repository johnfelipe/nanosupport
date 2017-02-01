<?php
/**
 * Utilities Class
 *
 * Organize all the utilities methods.
 *
 * @author      nanodesigns
 * @category    Class/Helpers
 * @package     NanoSupport
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class NSUtilities {

	/**
	 * Get NS General Settings from db
	 * @var array
	 */
	public $ns_general_settings;

	/**
	 * Return Support Desk ID
	 * @var integer
	 */
	public $get_support_desk_id;

	public function __construct() {
		$this->ns_general_settings = get_option( 'nanosupport_settings' );
	}

	/**
	 * Get the Support Desk ID
	 * @return integer Return using the object
	 */
	public function get_support_desk_id() {
		return $this->get_support_desk_id = $this->ns_general_settings['support_desk'];
	}

}

$NSUtils = new NSUtilities;
