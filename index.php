<?php include 'header.php' ?>

<div class="hero">

</div>

<div class="wrapper">
	<div class="content">

		<div class="workSection section">

			<h2>Work</h2>

			<div class="rule2"></div>

			<div class="workPiece">
				
			</div>
			<div class="workPiece">
				
			</div>
			<div class="workPiece">
				
			</div>
			<div class="clear"></div>
		</div>


		
		<div class="aboutSection section">

			<h2>About</h2>

			<div class="rule2"></div>


			<p>High Life Williamsburg synth kale chips American Apparel tofu messenger bag, next level irony pickled Brooklyn distillery. Street art synth whatever Truffaut gastropub shabby chic. Tumblr keytar hashtag, Kickstarter PBR Wes Anderson brunch stumptown VHS letterpress American Apparel 3 wolf moon. Direct trade +1 narwhal crucifix, PBR&B squid wolf. Keffiyeh photo booth meggings cred. Next level Pinterest scenester mixtape pork belly Godard. Leggings salvia tattooed cornhole selvage, fingerstache keytar 8-bit Bushwick Wes Anderson health goth Odd Future organic Vice.</p>


			<div class="clear"></div>
		</div>

		<div class="blogSection section">

			<h2>Blog</h2>

			<div class="rule2"></div>


			<?php
			$args = array( 'numberposts' => '3' );
			$recent_posts = wp_get_recent_posts($args);
			foreach( $recent_posts as $recent ){
				echo '<div class ="post"><a href="' . get_permalink($recent["ID"]) . '"><h3>' .   $recent["post_title"].' <span>' .$recent['post_date']. '</h3></a></div> ';
			}
			?>

			<div class="clear"></div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>