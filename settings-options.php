<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/** Filters the options array building the Sidebars extension settings form, starting empty for others to populate. */
$options = apply_filters( 'fw_ext_sidebars_settings_options', array() );