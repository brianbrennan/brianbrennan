
<?php include 'header.php' ?>

	<div class="content">
		
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

		<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: Website Contact Form';
		$to = 'me@brianbrennan.com';
		$subject = 'Site Message';

		$body = "From: $name\n Email: $email\n Message:\n $message";
		?>

		<?php 
		if($_POST['submit']){

			if (mail ($to, $subject, $body, $from)) { 
				echo '<p>Your message has been sent!</p>';
			} else { 
				echo '<p>Something went wrong, go back and try again!</p>'; 
			}
		} 
		?>



	</div>

<?php include 'footer.php' ?>