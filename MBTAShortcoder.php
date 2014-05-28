<?php
/**
 * Plugin Name: MBTAShortcoder
 * Plugin URI: https://github.com/wolfd/MBTAShortcoder
 * Description: Provides a shortcode to display MBTA subway statuses for given stops. Made for Northeastern College of Computer and Information Science Crew for the Digital Display Systems project.
 * Version: 0.1
 * Author: Danny Wolf <wolf@ccs.neu.edu>
 * Author URI: http://crew.ccs.neu.edu
 */

include_once( "MBTAShortcoder.class.php" );

if ( class_exists( 'MBTAShortcoder' ) ) {
	$dds_mbta_status = new MBTAShortcoder();
}
