
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

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
