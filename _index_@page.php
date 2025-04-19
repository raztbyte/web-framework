<!DOCTYPE html>
<html>
	<head>
		<?php require('.core/script/script.php'); ?>
		<link rel="stylesheet" type="text/css" href=".core/assets/assets.css"/>

		<!-- TP -->
		<link rel="stylesheet" type="text/css" href=".core/tp/boxicons/css/boxicons.css"/>
		<!-- -- -->
		
		<title>xxxx</title>
		<meta name="application-name" content="xxxx"/>
		<meta name="description" content="xxxx"/>
		<meta name="keywords" content="xxxx"/>
		<meta name="author" content="xxxx"/>
		<meta name="copyright" content="xxxx"/>

		<meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0"/>
		<meta name="HandheldFriendly" content="true"/>
		<meta name="mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" type="image/png" href=""/>
	</head>
	<style type="text/css">

		.body {

			background: #ffffff;
			width: 100%;
			height: auto;

		}

		@media screen and (min-width: 0px) {

			.px0 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: block;

			}
			.px545 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px756 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px1024 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}

			.page-GuestTest {

				background: #ffffff;
				width: 100%;
				height: auto;

			}

		}

		@media screen and (min-width: 545px) {

			.px0 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px545 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: block;

			}
			.px756 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px1024 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}

			.page-GuestTest {

				background: #ffffff;
				width: 100%;
				height: auto;

			}

		}

		@media screen and (min-width: 756px) {

			.px0 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px545 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px756 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: block;

			}
			.px1024 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}

			.page-GuestTest {

				background: #ffffff;
				width: 100%;
				height: auto;

			}

		}

		@media screen and (min-width: 1024px) {

			.px0 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px545 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px756 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: none;

			}
			.px1024 {

				background: #ffffff;
				width: 100%;
				height: auto;
				display: block;

			}

			.page-GuestTest {

				background: #ffffff;
				width: 100%;
				height: auto;

			}

		}

	</style>
	<body>
		<?php

			if($_GET['page'] == 'GuestTest') {include('.portal/guest/test.php');}
			else {echo '<script>window.location = "?page=GuestTest"</script>';}

		?>
	</body>
	<script type="text/javascript">



	</script>
</html>