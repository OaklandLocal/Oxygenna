<?php
/**
 * Text option
 *
 * @package **THEME**
 * @subpackage Core
 * @since 1.0
 *
 * @copyright **COPYRIGHT**
 * @license **LICENCE**
 * @version **VERSION**
 */

/**
 * Simple Text Input Box
 */
class OxyHiddenText extends OxyOption {

    /**
     * Creates option
     *
     * @return void
     * @since 1.0
     **/
    function __construct( $field, $value, $attr ) {
        parent::__construct( $field, $value, $attr );
        $this->set_attr( 'type', 'text' );
        $this->set_attr( 'value', esc_attr( $value ) );
    }

    /**
     * Overrides super class render function
     *
     * @return string HTML for option
     * @since 1.0
     **/
    public function render( $echo = true ) {
        echo '<input type="hidden"' . $this->create_attributes() . ' />';
    }
}