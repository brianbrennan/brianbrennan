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

	<h3>Read Other Posts</h3>
	<div class="rule2"></div>

	<div class="posts">
		<?php
		$paged = get_query_var('paged');
		$args = array(
			'numberposts'       => 4,
			'offset'            => $paged*4,
			'orderby'           => 'post_date',
			'order'             => 'DESC',
			'post_type'         => 'post',
			'post_status'       => 'publish',
			'suppress_filters'  => true
			);
		$posts_array = get_posts( $args );
		?>
		<?php


		$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category' => 1 );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<div class="post">
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?> <span><?php the_date(); ?></span></h3>
			</a>
		</div>

		<?php endforeach; 
		wp_reset_postdata();?>
	</div>
</div>
</div>

<?php get_footer(); ?>