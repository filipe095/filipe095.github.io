<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PMS</title>
		<link href='//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/less" href="./css/style.less">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" href="./node_modules/sweetalert/dist/sweetalert.css" type="text/css">

	    <script type="text/javascript" src="./node_modules/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
		<script>
			$(function(){
				$('[data-toggle="tooltip"]').tooltip();
				updateClock();
				setInterval(function(){updateClock();}, 20*1000);
				function updateClock(){ $('.timeOverlay').text(moment().format('HH:mm')); }
			});
		</script>
	</head>
	<body class="container-fluid">

		<header>
			<?php include 'menu.inc'; ?>
			<div class="timeOverlay black bottom right">
			</div>
			<div class="textOverlay">
				<span class="welcomeTo">Welcome to the</span><br>
				<span class="pms">PMS</span>
			</div>

		</header>

		<main>

		</main>
		<footer>

		</footer>
	</body>
</html>