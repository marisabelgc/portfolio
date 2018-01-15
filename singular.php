<?php get_header(); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<section class="bg-light  allvh  p1">
	<?php printf('
		<article class="container  bg-white  p2">
		<h3 class="f2_5  center">%s</h3>
		<span class="f_75  center  block">%s</span>
		<img src="%s" class="center">
		%s
		</article>',
		get_the_title(),
		get_the_date(),
		main_image_url('full'),
		wpautop($post->post_content)
	); 
	endwhile; endif; ?>
</section>

<?php wp_footer(); ?>
</body>
</html>