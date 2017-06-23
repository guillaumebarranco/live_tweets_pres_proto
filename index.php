<?php

	$baseurl = "http://localhost";
	// $baseurl = "http://92.222.34.194";
	$url = $baseurl."/protoedf";

?>

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes">
		<title>Live Tweet</title>
	
		<link href="https://www.fontify.me/wf/b4de00034106342aa4e5b1e4741cecb9" rel="stylesheet" type="text/css">
		<link rel="stylesheet" 			href="<?= $url ?>/styles.css" />
	</head>

	<body>

		<div class="wrapper">

			<h1>Home</h1>

			<img src="img/edf.png" width="300" alt="">

			<h2>X</h2>

			<img src="img/ecv.svg" width="300" alt="">

			<h2>23/06</h2>

			<a class="button" href="tweets.php">Join</a>

			<div class="schedule">
				
				<ul>
					<li>13:00	intro</li>
					<li>13:10	COCKPIT</li>
					<li>13:30	IN BETWEEN SPACE</li>
					<li>13:50	CONNEXLAB </li>
					<li>14:10	VIRAGE</li>
					<li>14:30	SMARTHOME </li>
					<li>14:50	pause 10'</li>
					<li>15:00	HAVANA </li>
					<li>15:20	VISUTHON</li>
					<li>15:40	VR MOBILE</li>
					<li>16:00	CO-CREA SPACE</li>
					<li>16:20	PLATEAU SACLAY</li>
					<li>16:45	Délibération du jury</li>
					<li>17:15/17:30	Débrief général avec les étudiants</li>
				</ul>
			</div>
		</div>

	</body>

</html>
