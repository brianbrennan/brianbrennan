<?php get_header(); ?>
<div id="main">
	<div id="content" class="blog single">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<h4><?php the_time('F jS, Y') ?></h4>
		<div class="rule"></div>
		<div class="clearSingle"></div>
		<p><?php the_content(); ?></p>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>