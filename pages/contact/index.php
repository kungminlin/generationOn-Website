<!DOCTYPE html>
<html>
<head>
	<?php include('../../assets/templates/head.php') ?>
</head>
<body>
	<?php include('../../assets/templates/nav.php') ?>
	<div class="section light">
		<div class="content">
			<div class="align-mid">
				<h1>Contact Us</h1>
			</div>
		</div>
		<div class="content">
			<form>
				<input type="text" id="fname" name="firstname" placeholder="First Name">
				<input type="text" id="lname" name="lastname" placeholder="Last Name">
				<input type="email" id="email" name="email" placeholder="Email">
				<input type="tel" id="phone" name="phone" placeholder="123-456-7890">
				<textarea placeholder="Comment"></textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
	<?php include('../../assets/templates/footer.php') ?>
</body>
</html>