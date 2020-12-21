<?php

$versions = array("11.14.0", "11.13.0", "11.12.0", "11.9.0", "11.8.0", "11.7.0", "11.6.0", "11.5.0", "11.4.0", "11.3.0", "11.2.0", "11.1.0", "11.0.0", "10.7.0", "10.6.0", "10.5.0", "10.4.0", "10.3.0", "10.2.0", "10.1.0", "10.0.0", "9.9.0", "9.8.0", "9.7.0", "9.6.0", "9.5.0", "9.4.0", "9.3.0", "9.2.0", "9.1.0", "9.0.0", "8.1.0", "8.0.0", "7.2.0", "7.1.0", "7.0.0", "6.3.0", "6.2.0", "6.1.0", "6.0.0", "5.1.0", "5.0.0", "4.5.0", "4.4.0", "4.3.0", "4.2.0", "4.1.0", "4.0.0", "3.0.0", "2.1.0", "2.0.0", "1.1.0", "1.0.0");
$first = true;

include('./layouts/header.php');
?>

<form action="step_2.php" method="get">
	<h1>Question 1: What's your Nintendo 3DS firmware version?</h1>

	<div class="input-group">
		<select class="form-select" name="version" area-describedby="versionHelp">
			<?php foreach ($versions as $version) {
				if ($first) {
					$first = false;
					echo "<option value='$version' selected>Latest - $version</option>";
				} else {
					echo "<option value='$version'>$version</option>";
				}
			} ?>
		</select>
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	<p id="versionHelp" class="form-text">
		In order to find this, go to <b>System Settings</b> and take a look at the numbers on the top right.
		<br><img src="https://3ds.hacks.guide/images/screenshots/system-version.png">
	</p>
</form>

<?php include('./layouts/footer.php'); ?>