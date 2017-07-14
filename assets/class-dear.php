<?php
/**
 * WP_DEARTWO class
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WP_DEARTWO.
 */

if ( ! class_exists( 'WP_DEARTWO' ) ) :

class WP_DEARTWO {

	/**
	 * Settings.
	 *
	 * @var 	array
	 */
	private $deartwo_settings;



	/**
	 * Enqueue Script.
	 *
	 */
	public function dear_power() {
		if ( 'on' == $this->is_posts || 'on' == $this->is_pages || shortcode_exists( 'deartwo' ) ) {
			?>
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>
			<?php
		}
	} 


	/**
	 * Add Dear Plugin.
	 */
	public function add_deartwo_plugin( $content ) {
		// Get the $post.
		global $post;


		// If nothing from both of the check then simply return the content.
		return $content;

	} // add_deartwo_plugin() ended.
	


	/**
	 * [deartwo] Shortcode.
	 */
	public function shortcode() {
		/**
		 * Shortcode: `[deartwo]`.
		 */
		add_shortcode( 'deartwo', function () {
			return '<div></div>';
		} );// annonymous function and action ended.

	}


} // Class WP_DEARTWO ended.

endif;
