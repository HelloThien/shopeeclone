


<?php
		 

         if ($_SERVER["REQUEST_METHOD"] == "POST"&&$_POST['name']&&$_POST['pass']&&$_POST['repass']) {
            $name =	$_POST['name'];
    
            $pass = $_POST['pass'];
            $repass = $_POST['repass'];
     
             
            
            if($pass!=$repass) {  echo '
                <script>
                alert("Nhập lại mật khẩu không đúng!")
                
                </script> 
            ';}
            else
            {
              $success =  $user->register($name,$pass);
            if($success) {
				$order->initCard($dataUser['cusID']);
                echo '
              <script>
              alert("Tạo tài khoản thành công!")
              
              </script> 
          ';
                
                header("Location:./login");}
              else echo '
              <script>
              alert("Tài khoản đã tồn tại!") 
              </script> 
          ';

            }
    
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

			<!-- resgist form -->
			<div class="auth-form form-register   ">
				<div class="auth-form__container">
					<div class="auth-form__header">
						<h3 class="auth-form__heading">Đăng ký</h3>
						 <a href="./login"><span class="auth-form__switch-btn btn-login">Đăng nhập</span></a>
					</div> 

					 <form action="./register"  method="POST" >
					 <div class="auth-form__form">
						<div class="auth-form__group">
							<input class="auth-form__input" name="name" type="text" placeholder="Email của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" name ="pass" type="password" placeholder="Mật khẩu của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input"name="repass" type="password" placeholder="Nhập lại mật khẩu">
						</div>
					</div>

					<div class="auth-form__aside">
						<p class="auth-form__policy-text">Bằng việc đăng ký, bạn đã đồng ý với QC - Shop về <a href="#" class="auth-form__policy-link">Điều khoản dịch vụ</a> &
							<a href="#" class="auth-form__policy-link">Chính sách bảo mật</a>
						</p>
					</div>

					<div class="auth-form__controls">
					 
						<button type='submit' class="btn btn--primary">Đăng ký</button>
					</div>	
					 </form>
				</div>

				<div class="auth-form__socials">
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
						<i class="fab fa-facebook-square auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Kết nối với Facebook
						</span>
					</a>
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
						<i class="fab fa-google auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Kết nối với google
						</span>
					</a>
				</div>
			</div> -->

			 
		</div>
	</div>

	 

	
 
</body>

</html>