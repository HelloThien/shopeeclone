<div class="app__container">
	<div class="grid wide">
		<div class="row sm-gutter app__content">


			<!-- article -->
			<div class="col l-12 m-12 c-12">
				<nav class="nav-category">
					<div class="row sm-gutter col">
						<div class="header-category">
							Danh Mục
						</div>

						<div class="list-item-category">
							<?php



							$type_pro = $product->gettype();

							for ($x = 0; $x < count($type_pro); $x += 2) {

								echo ' <div class="box-items">
								 <a href="'. $config['url'] .'/type/'. $type_pro[$x + 1]['productTypeCodeName'] .'">
								 <div class="item-category">
								<div class="item-category-img">
									<img src="' . $type_pro[$x]['img'] . '" alt="">
								</div>
								<div class="item-category-name">' . $type_pro[$x]['productTypeName'] . '</div>
							</div></a>
							 <a href="'. $config['url'] .'/type/'. $type_pro[$x + 1]['productTypeCodeName'] .'">
							 <div	  class="item-category">
								<div class="item-category-img">
									<img src="' . $type_pro[$x + 1]['img'] . '" alt="">
								</div>
								<div class="item-category-name"> ' . $type_pro[$x + 1]['productTypeName'] . '</div>
							</div></a>
								</div>';
							}

							?>
						</div>
					</div>
				</nav>
				<!-- home filter -->
				<div class="home-filter hide-on-mobile-tablet">
					<span class="home-filter__label">
						Sắp xếp theo
					</span>
					<button class="btn home-filter__btn">Phổ biến</button>
					<button class="btn btn--primary home-filter__btn">Mới nhất</button>
					<button class="btn home-filter__btn">Bán chạy</button>

					<div class="select-input">
						<span class="select-input__label">Giá</span>
						<i class="fas fa-chevron-down select-input__icon"></i>
						<ul class="select-input__list">
							<li class="select-input__item">
								<a href="#" class="select-input__link">Giá: Thấp đến cao</a>
							</li>
							<li class="select-input__item">
								<a href="#" class="select-input__link">Giá: Cao đến thấp</a>
							</li>

						</ul>
					</div>

					<div class="home-filter__page">
						<span class="home-filter__page-num">
							<span class="home-filter__page-current">1</span>/
							<span class="home-filter__page-total">14</span>
						</span>
						<div class="home-filter__page-control">
							<a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
								<i class="fas fa-angle-left home-filter__page-icon"></i>
							</a>
							<a href="#" class="home-filter__page-btn">
								<i class="fas fa-angle-right home-filter__page-icon"></i>
							</a>
						</div>
					</div>
				</div>

				<!--end home filter -->

				<ul class="header__sort-bar">
					<li class="header__sort-item">
						<a href="#" class="header__sort-link">Liên quan</a>
					</li>

					<li class="header__sort-item header__sort-item--active">
						<a href="#" class="header__sort-link">Mới nhất</a>
					</li>

					<li class="header__sort-item">
						<a href="#" class="header__sort-link">Bán chạy</a>
					</li>

					<li class="header__sort-item">
						<a href="#" class="header__sort-link">Giá</a>
					</li>
				</ul>
				<!-- product -->


				<div class="home-product">
					<div class="row sm-gutter">
						<!-- product item -->
						<?php
						 
						$page = 0;
						if (isset($_POST["page"])) 	$page = $_POST["page"];;
						for ($x = $page * 41; $x <= $page * 41 + 41; $x += 1) {
							if(!$list_pro[$x]) break;
							echo '<div class="col l-2 m-3 c-6">
		<a class="home-product-item" href="'. $config['url'] .'/detail/'. $list_pro[$x]['productID'] .'">
		<div class="home-product-item-img" style="background-image: url(' . $list_pro[$x]['productImage'] . ')">
		</div>
		<h4 class="home-product-item-name">' . $list_pro[$x]['describlePro'] . '</h4>
		<div class="home-product-item__price">
		';
							$priceOld = 0;
							$priceNew = 0;
							if ($list_pro[$x]['productDiscount']) {
								$priceNew = $list_pro[$x]['price'] * (100 - $list_pro[$x]['productDiscount']) / 100;
								$priceOld = $list_pro[$x]['price'];
								echo ' <span class="home-product-item__price-old">' . number_format($priceOld, 0, "", ".") . 'đ</span>
		 <span class="home-product-item__price-current">' . number_format($priceNew, 0, "", ".") . '₫</span>
	 ';
							} else {
								echo '  <span class="home-product-item__price-current">' . number_format($list_pro[$x]['price'], 0, "", ".") . '₫</span>';
							}


							echo
							'	</div>
		<div class="home-product-item__action">
			<span class="home-product-item__like home-product-item__like--liked">
				<i class="far fa-heart home-product-item-icon-like-empty"></i>
				<i class="fas fa-heart home-product-item-icon home-product-item-icon-like-fill"></i>
			</span>
			<div class="home-product-item__rating">
				<i class="fas fa-star home-product-item__star--gold "></i>
				<i class="fas fa-star home-product-item__star--gold"></i>
				<i class="fas fa-star home-product-item__star--gold"></i>
				<i class="fas fa-star home-product-item__star--gold"></i>
				<i class="fas fa-star home-product-item__star--gold"></i>
			</div>
			<span class="home-product-item__sold">' . $list_pro[$x]['sold'] . ' đã bán</span>
		</div>
		<div class="home-product-item__origin">
			<span class="home-product-item__brand">' . $list_pro[$x]['shopName'] . '</span>
			<span class="home-product-item__origin-name">' . $list_pro[$x]['shopAddress'] . '</span>
		</div>
		<div class="home-product-item__favourite">
			<i class="fas fa-check"></i>
			<span>Yêu thích</span>
		</div>
		<div class="home-product-item__sale-off">
			<span class="home-product-item__sale-off-percent">' . $list_pro[$x]['productDiscount'] . '%</span>
			<span class="home-product-item__sale-off-label">GIẢM</span>
		</div>
	</a>
</div>';
						}
						?>



					</div>
				</div>
				<!--end product -->

				<!-- pagination -->
				<ul class="pagination home-product__pagination">
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">
							<i class="pagination-item__icon fas fa-angle-left"></i>
						</a>
					</li>

					<li class="pagination-item pagination-item--active">
						<a href="#" class="pagination-item__link">1</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">2</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">3</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">4</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">5</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">...</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">14</a>
					</li>

					<li class="pagination-item">
						<a href="#" class="pagination-item__link">
							<i class="pagination-item__icon fas fa-angle-right"></i>
						</a>
					</li>
				</ul>
				<!--end pagination -->
			</div>
			<!--end article -->
		</div>
	</div>
</div>