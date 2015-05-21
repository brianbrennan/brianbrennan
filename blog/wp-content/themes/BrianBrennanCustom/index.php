<?php include 'header.php' ?>

<div class="blog">
	<h2>Blog</h2>

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


		$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => 1 );

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

<?php include 'footer.php' ?>