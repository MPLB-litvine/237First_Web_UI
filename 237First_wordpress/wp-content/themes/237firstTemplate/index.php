<?php
	get_header();
	if (have_posts()) : while (have_posts()) : the_post(); 
?>
<!-- this line adds the post content to the page -->
<?php the_content(); ?>
<?php
	endwhile;
	else:
		echo '<p>No content found</p>'
?>

<?php endif;
	get_footer(); 
?>