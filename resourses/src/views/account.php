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

	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/fonts/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/detail.css">
	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/cart.css">
	<link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/account.css">
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
						<div class="">Tài Khoản </div>
					</div>
					<div class=""></div>
				</div>
			</div>
		</div>

		<div class="container mt-3   ">
			<div class="row">
				<div class="col-2 ">

					<ul class="nav flex-column mt-4">
						<li class="nav-item   ">
							<a class="nav-link color-active" href="#profile"><img class="mx-1" src="https://cf.shopee.vn/file/ba61750a46794d8847c3f463c5e71cc4" width="20px" alt="">Tài Khoản Của Tôi</a>
						</li>
						<li class="nav-item">
							<a href="#purchase" class="nav-link"><img src="https://cf.shopee.vn/file/f0049e9df4e536bc3e7f140d071e9078" width="20px" class="mx-1">Đơn Mua</a>
						</li>

					</ul>
				</div>
				<div class="col-10  ">
					<div class="profile-user  main-box ">
						<div class="container">
							<div class="header-profile">
								<div class="fs-5	">Hồ Sơ Của Tôi </div>
								<div class="">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
							</div>
							<div class="main-profile row py-4">
								<div class="col-8 px-5">
									<form action="">
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Tên Tài Khoản
											</div>
											<input autocomplete="on" class="field-input col-9" value=" " disabled name="username" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Mật Khẩu
											</div>
											<input autocomplete="on" class="field-input col-9" type="password" value=" " name="password" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Nhập Lại Mật Khẩu
											</div>
											<input autocomplete="on" class="field-input col-9" type="password" value="fsffs" name="password" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Tên Của Bạn
											</div>
											<input autocomplete="on" class="field-input col-9" value=" " name="cusName" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Email
											</div>
											<input autocomplete="on" class="field-input col-9" value=" " name="email" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Địa Chỉ
											</div>
											<input autocomplete="on" class="field-input col-9" value="" name="address" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Số Điện Thoại
											</div>
											<input autocomplete="on" class="field-input col-9" value="0862669124" name="phone" />
										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Giới Tính
											</div>
											<div class="d-flex col-9">
												<div class="form-check form-check-inline">
													<input autocomplete="on" class="form-check-input" type="radio" name="sex" id="Nam" value="nam">
													<label class="form-check-label" for="Nam">Nam</label>
												</div>
												<div class="form-check form-check-inline">
													<input autocomplete="on" class="form-check-input" type="radio" name="sex" id="Nu" value="nu">
													<label class="form-check-label" for="Nu">Nữ</label>
												</div>
											</div>

										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">
												Ngày Sinh
											</div>
											<div class="d-flex col-9">
												<input autocomplete="on" class="field-input col-9" type="date" name="birth" value="2018-07-22" />
											</div>

										</div>
										<div class="field-profile row align-items-center py-3">
											<div class="field-name col-3 px-3">

											</div>
											<div class="d-flex col-9">
												<button class="field-input w-25 col-9  rounded color-white btn-save "> Lưu</button>
											</div>

										</div>


									</form>
								</div>
								<div class="col-4 img-profile border-start">
									<img class="rounded-circle avatar-img" src="http://localhost/single/public/img/avata.jpg" width="50%" height="150px" alt="">
									<button id="avatar" class="  select-img rounded w-50 mx-auto border  py-2" data-bs-toggle="modal" data-bs-target="#myModal">Chọn Ảnh </button>

									<div class="  field-name text-start w-75 m-auto">Dụng lượng file tối đa 1 MB <br>
										Định dạng:.JPEG, .PNG</div>
								</div>
							</div>
						</div>
					</div>
					<div class="purchase main-box d-none">

						<div class="  header-purchase   ">
							<div class="col-2  active-header-purchase">Tất cả</div>
							<div class="col-2  ">Chờ xác nhận</div>
							<div class="col-2  ">Chờ lấy hàng</div>
							<div class="col-2  ">Đang giao</div>
							<div class="col-2  ">Đã nhận </div>
							<div class="col-2  ">Đã hủy </div>
						</div>
						<div class="purchase-search ">
							<i class="fas fa-search"></i>
							<input type="text" placeholder="Tìm kiếm theo Tên Shop, ID đơn hàng hoặc Tên Sản phẩm">
						</div>
						<div class="list-item-purchase">
							Bạn chưa mua sản phẩm nào !
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Link file image</h4>
						<button type="button" class="btn-close   " data-bs-dismiss="modal"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<input autocomplete="on" class="field-input  w-100" type="text" name="img" value="" />
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger load-img" data-bs-dismiss="modal">Save</button>
					</div>

				</div>
			</div>
		</div>
		<?php
			require './src/views/components/footernew.php';
		?>
	</div>


	<!-- alert -->
	<div class="alert">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<strong>Success!</strong> Đã lưu thông tin của bạn!


	</div>




	<script src="<?php echo $config['url'] ?>/public/js/function.js"> </script>

	<script>
		$(document).ready(function(e) {

			const tabs = $('.nav-item')
			const panes = $('.main-box')

			tabs.each(function(index) {
				const pane = panes[index]

				$(this).click(function() {
					 
					tabs.children('.nav-link.color-active').removeClass('color-active')
					$(this).children('a').addClass('color-active')
					$(panes).addClass('d-none')
					$(pane).removeClass('d-none')
				})
			})

			const purchase = $(' .header-purchase div ')

			purchase.each(function(index) {
				$(this).click(function() {
					 
					renderHistory(index)
					$('.header-purchase div.active-header-purchase').removeClass('active-header-purchase')
					$(this).addClass('active-header-purchase')
				})
			})





			$('.load-img').click(function() {

				$('.avatar-img').attr('src', $('input[name="img"]').val())
			})

			var pathArray = window.location.pathname.split('/');
			$.post('/single/api/users/profile', function(data, status) {

				$(":input").each(function() {
					let name = $(this).attr("name")

					if (name === "sex" && $(this).val() === data['sex']) $(this).prop("checked", true)
					else if (name === "sex");
					else if (name === 'img') {
						$(this).val(data['img'])
						$('.avatar-img').attr('src', data['img'])
					} else $(this).val(data[$(this).attr("name")]);
				});
			})

			 function renderHistory(stutus){
				$.get('/single/api/order/history', function(data, status) {
				let newData  = []
				if(stutus===0){
					 
					newData = data.filter(el => el.status != 0 )
				}
				else  newData = data.filter(el => el.status != 0&&el.stutus ==stutus -1)
				const history = new Cart(newData)
				 
				$('.list-item-purchase').html(history.renderListHistory())
			})

			 }
			 renderHistory(0)




		})
		$('.btn-save').click(function(e) {
			e.preventDefault()
			var user = {}
			$(":input").each(function() {
				if ($(this).attr('name')) {

					user[$(this).attr("name")] = $(this).val();
				}
			});
			user['sex'] = $("input[name='sex']:checked").val()

			$.post('/single/api/users/update', {
				...user
			}, function(data, status) {
				$('.alert').fadeIn(500)
				$('.alert').fadeOut(4000)
			})

		})
	</script>



</body>

</html>