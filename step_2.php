<?php

function SoundHaxCompatible ($version) {
	if (!substr($version, 0, 2) == "11") return true;
	if (preg_match("/^11\.[0-3]\.0$/", $version)) return true;
	return false;
}

if (SoundHaxCompatible($_GET['version']))
	die(header("Location: https://3ds.hacks.guide/installing-boot9strap-(soundhax)"));

include('./layouts/header.php');
?>

<form action="step_3.php" method="get">
	<h1>Question 2: Can you connect to the Internet on your Nintendo 3DS?</h1>

	<div class="form-check">
		<input class="form-check-input" type="radio" id="customdns" name="WiFi" value="customdns" checked>
		<label class="form-check-label" for="customdns">I can connect to the internet on my Nintendo 3DS, as well as use custom DNS servers</label>
	</div>

	<div class="form-check">
		<input class="form-check-input" type="radio" id="nodns" name="WiFi" value="nodns">
		<label class="form-check-label" for="nodns">I can connect to the Internet on my Nintendo 3DS, yet I cannot change my DNS settings</label>
	</div>

	<div class="form-check">
		<input class="form-check-input" type="radio" id="cant" name="WiFi" value="cant">
		<label class="form-check-label" for="cant">I cannot connect to the Internet on my Nintendo 3DS</label>
	</div>

	<input type="hidden" id="version" name="version" value="<?php echo $_GET['version']; ?>">
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include('./layouts/footer.php'); ?>