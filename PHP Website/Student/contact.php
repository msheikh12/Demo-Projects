<?php 
	define("TITLE", "Contact Us | Franklin' Fine Dining");

	include('includes/header.php');

?>

	<div id="contact">
		
		<hr>

		<h1>Get in touch with us!</h1>

		<form method="post" action="" id="contact-form">
			
			<label for="name">Your name</label>
			<input type="text" id="name" name="name">

			<label for="email">Your email</label>
			<input type="email" id="email" name="email">

			<label for="message">and your name</label>
			<textarea id="message" name="message"></textarea>

			<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
			<label for="email">Subscribe to our email</label>
			

		</form>

	</div> <!-- contact -->

<?php
	include('includes/footer.php');
?>