<?php
/**
 * Single Ticket View.
 *
 * Template for displaying the content of a single ticket.
 *
 * @author  	nanodesigns
 * @category 	core
 * @package 	NanoSupport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();
?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php ns_get_template_part( 'content', 'single-ticket' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php
get_footer();