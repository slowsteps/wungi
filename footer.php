

<div class="nav-previous alignleft"><?php if (!is_front_page()) next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php if (!is_front_page()) previous_posts_link( 'Newer posts' ); ?></div>

<?php

if (is_single()) next_posts_link();

?>

<?php wp_footer(); ?>
</body>

<script>
		
		ShowSignup();
		
		function ShowSignup() 
		{
			
			jQuery("#signup").hide();
			//jQuery("#signup").slideDown("slow");	
			//jQuery("#signup").animate({marginTop:"+=100px"});
			jQuery("#signup").fadeIn();	
		}

</script>

</html>
