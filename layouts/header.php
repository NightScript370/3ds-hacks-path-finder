<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
		<style>
			.boxSelect {
				text-align: center;
			}

			.boxSelect input[type="radio"] {
				display: none;
			}

			.box {
				padding: 10px;
				margin: 20px;
				border-radius: 20px;
				background-color: rgba(0,0,0, 0.2)
			}

			.boxSelect input[type="radio"]:checked + .box {
				background-color: rgba(0, 0, 0, 0.4);
			}
		</style>
	</head>
	<body>
		<div class="container">