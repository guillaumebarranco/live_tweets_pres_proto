<?php

	$hashtag = "#CCSPACESFAQ";
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

		<script type="text/javascript" 	src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script 						src="<?= $url ?>/node_modules/socket.io-client/dist/socket.io.js"></script>
		<script 						src="<?= $url ?>/node_modules/moment/moment.js"></script>
	</head>

	<body class="white">



		<!-- <a class="back" href="index.php"><-</a> -->
		<a href="index.php" style="text-align: center; display: block; margin: 0 auto; width: 350px;">
			<img src="img/schedule.png" width="350" alt="">
		</a>

		<p style="text-align:center; font-size: 1.25em; margin-bottom: 50px;">Tweet with <strong>#EDFbyECV</strong></p>

		<div>
			<ul>
				<li>POST</li>
				<li>POST</li>
			</ul>
		</div>


		<script>
			function getTweets() {

				$.ajax({
					url: "<?= $baseurl ?>:3333",
					type: "GET",
					success: function(response) {
						response = JSON.parse(response);
						console.log('r', response);

						displayTweets(response);
					}
				});
			}

			function displayTweets(response) {

				$('ul').empty();

				for(var i in response.statuses) {

					if(i < 6) {

						var element = response.statuses[i];

						var date = moment(element.created_at).format('HH:mm');

						var text = element.text;
						// text = text.replace('<?= $hashtag ?>', '');

						var li = `

							<li class="italic">
								<div><img src="${element.user.profile_image_url}" width="50"></div>
								<i>${element.user.name} (${date})</i>
								<p>${text}</p>
						`;

						if(typeof element.entities.media !== "undefined") {

							var medias = element.entities.media;

							for(var j in medias) {
								var media = medias[j];
								li += `<img width="300" src="${media.media_url}">`;
							}
						}

						li += "</li>";

						$('ul').append(li);
					}
				}
			}

			getTweets();

			setInterval(function() {
				getTweets();
			}, 30000);

			// setInterval()

		</script>

	</body>

</html>
