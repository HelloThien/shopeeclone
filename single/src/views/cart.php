<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Shopee</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">



	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/detail.css">
	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/cart.css">

	<link rel="stylesheet" href="public/fonts/fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->





</head>

<body>
	<div class="app">
		<div class="header">
			<div class="header-nav  ">
				<div class="container d-flex">
					<div class="d-flex  ">
						<a href="<?php echo $config['url']?>/seller" class="header__nav__item  ">
							Kênh người bán
						</a>
						<a href="" class="header__nav__item px-2">
							Tải ứng dụng
						</a>
						<div class="header__nav__item px-2">
							Kết nối
							<a href="#" class="header__nav__link__icon">
								<i class="header__navbar-icon fab fa-facebook"></i>
							</a>
							<a href="#" class="header__nav__link__icon">
								<i class="header__navbar-icon fab fa-instagram"></i>
							</a>
						</div>
					</div>
					<div class="d-flex">
						<div class="header__nav__item px-3"><i class="header__navbar-icon far fa-bell "></i> Thông báo </div>
						<div class="header__nav__item px-3">
							<i class=" header__navbar-icon far fa-question-circle "></i> Hỗ trợ
						</div>

						<?php
						if ($dataUser) {

							$name = $dataUser['cusName'] ? $dataUser['cusName'] : $dataUser['username'];
							echo '<div class="header__nav__item  stardust-user"> <img src="' . $dataUser['img'] . '" alt="" class="header__notify-img"> ' . $name . '
							<span class="stardust-popover">
								 
							<div class="user-item-link">
								 <a href="/single/account">Tài khoản của tôi</a>
							</div>
							<div class="user-item-link">
								 <a href="/single/account">Đơn mua </a>
							</div>
							<div class="user-item-link">
								 <a href="/single/logout">Đăng xuất</a>
							</div>
							 
							</span>
							</div>
									';
						} else echo '
								<a href="' . $config['url'] . '/login" class="header__nav__item px-3">
									Đăng nhập 
								</a  >
		 						<a href="' . $config['url'] . '/register " class="header__nav__item ">
									Đăng kí
		  						</a>
								';
						?>
					</div>
				</div>
			</div>

			<div class="header-wrapper">
				<div class="container d-flex justify-content-between">
					<div class="header-cart-title">
						<a href="/single" class="shopee">SHOPEE </a>|
						<div class="">Giỏ Hàng </div>
					</div>
					<div class=""></div>
				</div>
			</div>
		</div>


		<div class="container     bg-white">
			<div class="title-option d-flex justify-content-between  my-3 ">
				<div class="">
					<div class="item-title-option">Sản Phẩm</div>
				</div>
				<div class="d-flex w-50 option-title ">
					<div class="item-title-option">Đơn Giá</div>
					<div class="item-title-option">Số Lượng </div>
					<div class="item-title-option">Sô Tiền </div>
					<div class="item-title-option">Thao tác</div>
				</div>
			</div>
		</div>
		<div class="list-product-cart">

		</div>
		<div class="fixed-total">
			<div class="container      bg-white   ">
				<div class="title-option d-flex justify-content-between  mt-3 ">
					<div class="">
						<div class="item-title-option">Tất cả Sản Phẩm</div>
					</div>
					<div class="d-flex w-50   ">
						<div class="item-title-option	 pt-2 fw-bold ">Tổng tiền: </div>
						<div class="item-title-option total-cart color-price fw-bold fs-4">0đ</div>
						<div class=" item-title-option btn-add-card payment-btn">
							Mua Hàng
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			require './src/views/components/footernew.php';
		?>

	</div>
	<script src="<?php echo $config['url'] ?>/public/js/function.js"> </script>
	<script>
		$(document).ready(function() {
			const cart = new Cart([]);
			$.get("/single/api/order/cart", function(data, status) {
				cart.addList(data)

				$('.list-product-cart').html(cart.renderListFull())
				$('.total-cart').text(cart.total())

			});

			$(document).on("click", ".option-remove", function(e) {
				$.post("/single/api/order/removecart", {
					id: $(".option-remove").attr('dataId')
				}, function(data, status) {

				});
				let id = $(this).parentsUntil('.container').attr("dataId")

				cart.removeItem(id)
				$('.list-product-cart').html(cart.renderListFull())
				$('.total-cart').text(cart.total())
			});
			$(document).on("click", ".minus", function(e) {
				let id = $(this).parent().parent().parent().parent().attr('dataId')
				

				if (cart.decreaItem(id)) {
					$.post("/single/api/order/decreament", {
						id: id
					}, function(data, status) {

					});
					$('.list-product-cart').html(cart.renderListFull())
					$('.total-cart').text(cart.total())
				}

			});
			$(document).on("click", ".plus", function(e) {
				let id = $(this).parent().parent().parent().parent().attr('dataId')


				if (cart.increaItem(id)) {
					$.post("/single/api/order/increament", {
						id: id
					}, function(data, status) {

					});
					$('.list-product-cart').html(cart.renderListFull())
					$('.total-cart').text(cart.total())
				}
			});
			$(document).on("click", ".payment-btn", function(e) {
				$.post("/single/api/order/payment" , function(data, status) {
					alert(data)
					cart.clear()
					$('.list-product-cart').html(cart.renderListFull())
					$('.total-cart').text(cart.total())
				});
			});


		});
	</script>



</body>

</html>