<?php get_header(); ?>

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','recipe-single');
			//
		} // end while
	} // end if
	?>

<?php get_footer(); ?>

