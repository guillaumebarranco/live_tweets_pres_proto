<?php

	// $baseurl = "http://localhost";
	// $url = $baseurl."/protoedf";
	$baseurl = "http://edfecv.webarranco.fr";
	$url = $baseurl."/";

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

			<div><img src="img/edf.png" width="300" alt=""></div>
			<div><img src="img/ecv.png" width="300" alt=""></div>

			<div class="separator"></div>

			<h2 style="font-weight: normal; font-size: 1.25em;">23.06.2017</h2>
			<h2 style="text-transform: uppercase; margin-bottom: 100px;">13h à Paris</h2>

			<a class="button white" href="tweets.php">Live Tweet</a>

			<div class="schedule">

				<!-- <div class="arrow_bottom"></div> -->
				<img src="img/arrow_bottom_blue.png" alt="">

				<h2>Schedule</h2>
				
				<ul>
					<li>13:00	Intro</li>
					<li>13:10	IN BETWEEN SPACE</li>
					<li>13:30	COCKPIT</li>
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
