<?php get_header(); ?>


	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','page');
			//
		} // end while
	} // end if
	?>



<?php get_footer(); ?>

