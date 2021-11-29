 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8">

 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Shopee</title>



 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

 	<link rel="stylesheet" href="<?php echo  $config['url'] ?>/public/css/base.css">
 	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/main.css">
 	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/grid.css">
 	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/responsive.css">


 	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/fonts/fontawesome/css/all.min.css">
 	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/detail.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<!-- Latest compiled JavaScript -->
 	<script src="<?php echo $config['url'] ?>/public/js/function.js"> </script>
 	 



 </head>

 <body>
 	<div class="app">
 		<!-- header -->
 		<?php
			require './src/views/components/header.php';
			?>
 		<!--end header -->

 		<!-- container -->
 		<?php
			require './src/views/components/detail.php';
			?>
 		<!--end container -->

 		<!-- footer -->
 		<?php
			require './src/views/components/footer.php';
			?>


 	</div>
	 <script src="<?php echo $config['url'] ?>/public/js/main.js"> </script>
 	<script>
 		 
 	</script>

 </body>

 </html>