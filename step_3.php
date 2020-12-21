<?php

if ($_GET['WiFi'] == 'cant')
	die(header("Location: /alternatives/"));

include('./layouts/header.php');
?>

<form action="step_4.php" class="boxSelect" method="get">
	<h1>Question 3: Which Family in tNintendo 3DS do you own?</h1>
	<label>
		<input type="radio" name="console" id="n3ds" value="n3ds" />
		<div class="box">
			<img src="https://github.com/lilyuwuu/Guide_3DS/raw/restructure/images/new3ds.png">
			<img src="https://github.com/lilyuwuu/Guide_3DS/raw/restructure/images/new3dsxl.png">
			<img src="https://github.com/lilyuwuu/Guide_3DS/raw/restructure/images/new2dsxl.png">
			<br><br><b>New 3DS Family</b>
		</div>
	</label>

	<label>
		<input type="radio" name="console" id="o3ds" value="o3ds" />
		<div class="box">
			<img src="https://github.com/lilyuwuu/Guide_3DS/raw/restructure/images/old3ds.png">
			<img src="https://github.com/lilyuwuu/Guide_3DS/raw/restructure/images/old3dsxl.png">
			<img src="https://github.com/lilyuwuu/Guide_3DS/raw/restructure/images/2ds.png">
			<br><br><b>Old 3DS Family</b>
		</div>
	</label>

	<input type="hidden" id="version" name="version" value="<?php echo $_GET['version']; ?>">
	<input type="hidden" id="WiFi" name="WiFi" value="<?php echo $_GET['WiFi']; ?>">
	<br><button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include('./layouts/footer.php'); ?>