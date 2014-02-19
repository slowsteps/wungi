
<?php

get_header();


if ( is_front_page() ) 
{
	$query = new WP_Query( 'category_name=featured' );
	while ( $query->have_posts() ) 
	{
		$query->the_post();
		RenderFeaturedPost();
	}
}
else
{
	while( have_posts() )
	{
		the_post();
		RenderPost();
	}

}


function RenderPost()
{
	echo '<div class=titledeluxe>';
		the_post_thumbnail();
		
		echo '<h2>';
			echo '<a href="';
			the_permalink();
			echo '">'.get_the_title().'</a>';
			
			//the_title(); 
		echo '</h2>';
		echo '<div class="postdate">';
			if (!is_page()) the_date();
		echo '</div>';
	echo '</div>';
	
	echo '<div class="post">';
		the_content();
	echo '</div>';
}

function RenderFeaturedPost()
{
	echo '<div class=titledeluxe>';
		the_post_thumbnail();
		$subtitle = get_post_meta( get_the_ID(), 'subtitle', true );
		if( $subtitle != "empty" ) echo '<div class="subtitle">'.$subtitle.'</div>';
		echo '<h2>';
			the_title();
		echo '</h2>';
	echo '</div>';
	
	echo '<div class="post">';
		the_content();
	echo '</div>';
}

get_footer();

?>

