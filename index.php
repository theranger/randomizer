<?php get_header() ?>
<?php query_posts(array('showposts' => 1, 'orderby' => 'rand')); ?>

	<main>
		<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		<?php endwhile;?>
	</main>

<?php get_footer(); ?>
