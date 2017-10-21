<?php
	define("TITLE", "Menu Item | Franklin' Fine Dining");

	include('includes/header.php');

	function strip_bad_chars( $input ) {

		// Advanced Built in Function
		
		$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input ); //preg replace & regular expressions
		return $output;
	}

	if (isset($_GET['item'])) {
		
		$menuItem = strip_bad_chars( $_GET['item'] );

		$dish = $menuItems[$menuItem];
	}

	// Calculate a suggested tip
	function suggestedTip($price, $tip){
       
        $totalTip = $price * $tip;
        echo $totalTip;
    }
?>


	<hr>

	<div id="dish">
		
		<h1>
			<?php echo $dish[title]; ?>

			<span class="price">
				<sup>$</sup>
				<?php echo $dish[price]; ?>
			</span>
		</h1>

		<?php echo $dish[blurb]; ?>

		<br>
		<br>
		<br>

		<p>
			<strong>Suggested beverage:
				<?php echo $dish[drink]; ?>
			</strong>
		</p>

		<p>
			<em>Suggested Tip: 
				<sup>$</sup><?php suggestedTip($dish[price], 0.20); ?>
			</em>
		</p>

	</div> <!-- dish -->

	<hr>

	<a href="menu.php" class="button previous">&laquo; Back to Menu</a>


<?php
	include('includes/footer.php');
?>