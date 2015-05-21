<?php include 'header.php' ?>

<div class="hero">

</div>

<div class="content">

	<div class="workSection section">

		<h2><a href="work.php">Work</a></h2>

		<div class="rule2"></div>

		<div class="workPiece">

		</div>
		<div class="workPiece">

		</div>
		<div class="workPiece">

		</div>
		<h5 class="viewAll"><a href="work.php">View All</a></h5>
		<div class="clear"></div>
	</div>



	<div class="aboutSection section">

		<h2><a href="about.php">About</a></h2>

		<div class="rule2"></div>


		<p>High Life Williamsburg synth kale chips American Apparel tofu messenger bag, next level irony pickled Brooklyn distillery. Street art synth whatever Truffaut gastropub shabby chic. Tumblr keytar hashtag, Kickstarter PBR Wes Anderson brunch stumptown VHS letterpress American Apparel 3 wolf moon. Direct trade +1 narwhal crucifix, PBR&B squid wolf. Keffiyeh photo booth meggings cred. Next level Pinterest scenester mixtape pork belly Godard. Leggings salvia tattooed cornhole selvage, fingerstache keytar 8-bit Bushwick Wes Anderson health goth Odd Future organic Vice.</p>

		<h5 class="viewAll"><a href="about.php">Read More</a></h5>


		<div class="clear"></div>
	</div>

	<div class="blogSection section">

		<h2><a href="blog">Blog</a></h2>

		<div class="rule2"></div>


		<div class="posts">
			<?php
			$args = array( 'numberposts' => '6' );
			$recent_posts = wp_get_recent_posts($args);
			foreach( $recent_posts as $recent ){
				echo '<div class ="post"><a href="' . get_permalink($recent["ID"]) . '"><h3>' .   $recent["post_title"].' <span>' .$recent['post_date']. '</h3></a></div> ';
			}
			?>
		</div>

		<div class="clear"></div>
	</div>

	<div class="contactSection section">
		
		<h2>Contact</h2>

		<div class="rule2"></div>


		<form id="contact" name="contact" method="post" action="contact.php">
			<div class="name">
				<label for="name"><h4>Name</h4></label>
				<input type="text" name="name" required>
			</div>
			
			<div class="email">
				<div>
					<label for="email"><h4>Email</h4></label>
					<input type="email" name="email" required>
				</div>
			</div>

			<div class="clear"></div>

			<label for="message"><h4>Message</h4></label>
			<textarea name="message" required rows="5"></textarea>

			<input type="submit" name="submit" value="Submit" id="submit">

		</form>



	</div>
</div>
<?php include 'footer.php' ?>