
<?php

get_header();


while ( have_posts() ) : the_post();
	
	echo '<div class=titledeluxe>';
		the_post_thumbnail();
		$subtitle = get_post_meta( get_the_ID(), 'subtitle', true );
		if( ! empty( $subtitle ) ) echo '<div class="subtitle">'.$subtitle.'</div>';
		echo '<h2>';
			the_title();
		echo '</h2>';
	echo '</div>';
	
	echo '<div class="post">';
		the_content();
	echo '</div>';
	
endwhile;

get_footer();

?>

