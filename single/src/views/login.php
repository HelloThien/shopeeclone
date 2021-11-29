
<?php
		 

	 if ($_SERVER["REQUEST_METHOD"] == "POST"&&$_POST['name']&&$_POST['pass']) {
		$name =	$_POST['name'];

		$pass = $_POST['pass'];
 
		$isUser = $user->checkUser($name,$pass);
		
		if($isUser) header("Location:/") ;
		else echo '
			<script>
			alert("Mật khẩu hoặc tài khỏan sai!")
			
			</script> 
		';

	 }

?>

 

 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopee</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="<?php echo  $config['url']?>/public/css/base.css">
	<link rel="stylesheet" href="<?php echo $config['url']?>/public/css/main.css">
	<link rel="stylesheet" href="<?php echo $config['url']?>/public/css/grid.css">
	<link rel="stylesheet" href="<?php echo $config['url']?>/public/css/responsive.css">
	<link rel="stylesheet" href="<?php echo $config['url']?>/public/fonts/fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
 
 
 

</head>

<body>
<div class="app">
		<!-- header -->
		<div class=" modal   " id='form-login'>
        <div class="header-form-login"></div>
		<div class="modal__overlay "></div>
		<div class="modal__body">

		 
			<!-- login form -->
			<div class="auth-form  form-login ">
			 	<form action="./login" method="POST">
				 <div class="auth-form__container">
					<div class="auth-form__header">
						<h3 class="auth-form__heading">Đăng nhập</h3>
						 <a href="./register"><span class="auth-form__switch-btn btn-register">Đăng ký</span></a>
					</div>

					<div class="auth-form__form">
						<div class="auth-form__group">
							<input class="auth-form__input" name="name" type="text" placeholder="Email của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" name="pass" type="password" placeholder="Mật khẩu của bạn">
						</div>
					</div>

					<div class="auth-form__aside">
						<div class="auth-form-help">
							<a href="#" class="auth-form__help-link auth-form-help-fogot">Quên mật khẩu</a>
							<span class="auth-form-help-separate">
							</span>
							<a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
						</div>
					</div>

					<div class="auth-form__controls">
						 
						<button type='submit' class="btn btn--primary">Đăng nhập</button>
					</div>
				</div>
				 </form>

				<div class="auth-form__socials">
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
						<i class="fab fa-facebook-square auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Đăng nhập với Facebook
						</span>
					</a>
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
						<i class="fab fa-google auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Đăng nhập với google
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
 
</body>

</html>

 