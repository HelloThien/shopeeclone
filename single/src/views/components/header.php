<!-- header -->
<header class="header">
	<div class="grid wide">

		<!-- header navbar -->
		<nav class="header__navbar hide-on-mobile-tablet">

			<!-- header navbar left -->
			<ul class="header__navbar-list">
			<li class="header__navbar-item header__navbar-item-has-qr header__navbar-item--separate">
					<a class="header__navbar-item-link" href="<?php echo $config['url']?>/seller">Kênh người bán</a>
					 
				</li>
				<li class="header__navbar-item header__navbar-item-has-qr header__navbar-item--separate">
					Tải ứng dụng 
					<div class="header__qr">
						<img src="<?php echo $config['url']?>/public/img/qrcode.png" alt="QR code" class="header__qr-img">
						<div class="header__qr-apps">
							<a class="header__qr-link">
								<img src="<?php echo $config['url']?>/public/img/ch_play.png" alt="CH Play" class="header__qr-download-img">
							</a>
							<a class="header__qr-link">
								<img src="<?php echo $config['url']?>/public/img/apstore.png" alt="Apstore" class="header__qr-download-img">
							</a>
						</div>
					</div>
				</li>
				<li class="header__navbar-item">
					<span class="header__navbar-item-no-pointer">Kết nối</span>
					 
				</li>
			</ul>
			<!--rnd header navbar left -->

			<!-- header navbar right -->
			<ul class="header__navbar-list">
				<li class="header__navbar-item header__navbar-item-has-notity">
					<a href="#" class="header__navbar-item-link">
						<i class="header__navbar-icon far fa-bell"></i>
						Thông báo
					</a>
					<!-- <div class="header__notify">
						<header class="header__notify-header">
							<h3>Thông báo mới nhận</h3>
						</header>
						<ul class="header__notify-list">
							<li class="header__notify-item header__notify-item-viewed">
								<a href="#" class="header__notify-link">
									<img src="<?php echo $config['url']?>/public/img/prd_img_3.jpg" alt="" class="header__notify-img">
									<div class="header__notify-info">
										<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
										<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
									</div>
								</a>
							</li>
							<li class="header__notify-item">
								<a href="#" class="header__notify-link">
									<img src="<?php echo $config['url']?>/public/img/prd_img_2.jpg" alt="" class="header__notify-img">
									<div class="header__notify-info">
										<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
										<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
									</div>
								</a>
							</li>
							<li class="header__notify-item header__notify-item-viewed">
								<a href="#" class="header__notify-link">
									<img src="<?php echo $config['url']?>/public/img/prd_img_4.jpg" alt="" class="header__notify-img">
									<div class="header__notify-info">
										<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
										<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
									</div>
								</a>
							</li>
							<li class="header__notify-item">
								<a href="#" class="header__notify-link">
									<img src="<?php echo $config['url']?>/public/img/prd_img_8.jpg" alt="" class="header__notify-img">
									<div class="header__notify-info">
										<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
										<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
									</div>
								</a>
							</li>
						</ul>
						<div class="header__notify-footer">
							<a href="#" class="header__notity-footer-link">Xem tất cả</a>
						</div>
					</div> -->
				</li>
				<li class="header__navbar-item">
					<a href="#" class="header__navbar-item-link">
						<i class="header__navbar-icon far fa-question-circle"></i>
						Trợ giúp
					</a>
				</li>


				<?php
				if ($dataUser) {
					$name = $dataUser['cusName']?$dataUser['cusName']:$dataUser['username'];
					echo '<li class="header__navbar-item header__navbar-user">
									<img src="'.$dataUser['img'].'" class="header__navbar-user-img">
									<span class="header__navbar-user-name">' .$name . '</span>
		
									<ul class="header__navbar-user-menu">
										<li class="header__navbar-user-item">
											<a    href="'.$config['url'].'/account/'.$dataUser['username'].' ">Tài khoản của tôi</a>
										</li>
										 
										<li class="header__navbar-user-item">
											<a   href="'.$config['url'].'/account/'.$dataUser['username'].'">Đơn mua</a>
										</li>
										<li class="header__navbar-user-item header__navbar-user-item--separate">
											<a class=" " href="./logout">Đăng xuất</a>
										</li>
									</ul>
								</li>';
				} else echo '
								<a class=" " href=" '.$config['url'].'/register"><li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate btn-register">Đăng ký </li> </a>
							 
								<a class=" "  href=" '.$config['url'].'/login"><li class="header__navbar-item header__navbar-item--strong btn-login">Đăng nhập</li> </a>
								
								';
				?>


			</ul>
			<!--end header navbar right -->
		</nav>

		<!-- end header-navbar -->


		<!-- header-search -->
		<div class="header-with-search">

			<label for="header-bars-input" class="header__bars-btn">
				<i class="fas fa-bars header__bars-icon"></i>
			</label>

			<input type="checkbox" class="header__bars-input" id="header-bars-input">
			<div class="header__mobile">
				<!-- <div class="header__mobile-search-wrap">
								<div class="header__mobile-search">
									<input type="text" class="header__mobile-search-btn" placeholder="Tìm kiếm sản phẩm...">
									<button class="header__search-moblie-btn">
										<i class="fas fa-search header__search-mobile-btn-icon"></i>
									</button>
								</div>
							</div> -->
				<ul class="header__mobile-list">
					<li class="header__mobile-item">
						<a href="" class="header__mobile-link">Trang chủ</a>
					</li>

					<li class="header__mobile-item">
						<a href="" class="header__mobile-link">Cửa hàng của tôi</a>
					</li>
					<?php

if ($dataUser) {
	$name = $dataUser['cusName']?$dataUser['cusName']:$dataUser['username'];
	echo '<li class="header__mobile-item">
	<a href="" class="header__mobile-link"> Tài khoản của tôi</a>
</li><li class="header__mobile-item">
<a href="./logout" class="header__mobile-link">Đăng xuất</a>
</li>';
} else echo '
<li class="header__mobile-item">
<a href="" class="header__mobile-link">Đăng ký</a>
</li>

<li class="header__mobile-item">
<a href="" class="header__mobile-link">Đăng nhập</a>
</li>
				
				';
					?>
					 
					 

				</ul>
				<label for="header-bars-input">
					<i class="fas fa-times header__mobile-close"></i>
				</label>

			</div>

			<label for="header-bars-input" class="modal d-none">
				<div class="modal__overlay"></div>
			</label>
			<!-- logo -->
			<div class="header__logo">
				<a href="/" class="header__logo-link">
					<img class="header__logo-img" src="https://cf.shopee.vn/file/d734f6291f072bb855371432da462d65" alt="">
				</a>
			</div>

			<!-- end logo -->

			<!-- search -->
			<div class="header__search hide-on-mobile">
				<div class="header__search-input-wrap">
					<input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm tại đây">

					<div class="header__search-history">
						<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
						<ul class="header__search-history-list">
							<li class="header__search-history-item">
								<a href="#">Mũ bảo hiểm</a>
							</li>
							<li class="header__search-history-item">
								<a href="#">Gang tay phượt</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="header__search-select">
					<span class="header__search-select-label">
						Trong shop
					</span>
					<i class="fas fa-chevron-down header__search-select-icon"></i>

					<ul class="header__search-option">
						<li class="header__search-option-item header__search-option-item--active">
							<span>Trong shop</span>
							<i class="fas fa-check "></i>
						</li>

						<li class="header__search-option-item">
							<span>Ngoài shop</span>
							<i class="fas fa-check "></i>
						</li>
					</ul>
				</div>

				<button class="header__search-btn">
					<i class="fas fa-search header__search-btn-icon"></i>
				</button>

			</div>
			<!--end search -->

			<!-- cart -->
			<div class="header__cart">
				<div class="header__cart-wrap">
					<div style="display:none" class="idCart" idCart="<?php echo $idCart ?>"> </div>
					<span class="header__cart-notice">
						 0
					</span>
					 <a href="/single/cart"><i class="fas fa-shopping-cart header__cart-icon"></i></a>
					<div class="header__cart-list">
						<!-- no cart: header__cart-list--no-cart -->
						 

						<h4 class="header__cart-heading">Sản phẩn đã thêm</h4>
						<ul class="header__cart-list-item">
							  
						</ul>
						<button class="btn btn--primary header__cart-view-cart">
							Xem giỏ hàng
						</button>
						 
					</div>
				</div>
			</div>
			<!--end cart -->
		</div>

		<!--end header-search -->
	</div>
	</div>
 

</header>
<!--end header -->