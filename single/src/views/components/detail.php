 <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
 </head>


 <div class="app__container  ">
     <div class="grid wide    ">
         <div class="path-detail">
             <a class="link-shop" href="/">Shopee</a> > <?php echo '' . $detail['productTypeName'] . ' >  ' . $detail['proName'] . '  > ' . $detail['describlePro'] . ''  ?>
         </div>
         <div class="detail-proName d-none"><?php echo $detail['proName'] ?></div>
         <div class="container-detail row  ">
             <div class="col-12 col-md-5">
                 <div class="detail-img px-5">
                     <img src="<?php echo $detail['productImage'] ?>" alt="">
                 </div>
             </div>

             <div class="col-12  col-md-7  ">
                 <div class="detail-title " idProduct="<?php echo $detail['productID'] ?>">
                     <?php echo $detail['describlePro'] ?>

                 </div>
                 <div class="detail-rate my-0 ">
                     <div class="detail-rate detail-rate-color ">
                         <div class="mx-2"><?php echo number_format((float) $detail['productRating'], 1, '.', '')  ?> </div><i class="fas fa-star      "></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>

                     </div>
                     <div class="wall mx-4 "  ></div>
                     <div class="detail-sold  "><?php echo $detail['sold'] ?> </div>
                     <div class="title-quantity mx-2">Đã bán </div>
                 </div>


                 <div class="detail-price my-3">
                     <div class="data-price d-none"><?php echo $detail['price']   ?></div>
                     <?php
                        $priceOld = 0;
                        $priceNew = 0;
                        if ($detail['productDiscount']) {
                            $priceNew = $detail['price'] * (100 - $detail['productDiscount']) / 100;
                            $priceOld = $detail['price'];
                            echo ' <span class="home-product-item__price-old">' . number_format($priceOld, 0, "", ".") . 'đ</span>
                        <span class="home-product-item__price-current detail-price-cur">' . number_format($priceNew, 0, "", ".") . '₫</span>
                        ';
                        } else {
                            echo ' <span class="home-product-item__price-current detail-price-cur">' . number_format($detail['price']    , 0, "", ".") . '₫</span>';
                        }
                        ?>
                 </div>
                 <div class="detail-quatity ">
                     <div class="title-quantity">Vận chuyển </div>
                     <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/1cdd37339544d858f4d0ade5723cd477.png" width='30px' alt="" class="mx-4"> Miễn phí vận chuyển
                 </div>
                 <div class="detail-quatity ">
                     <div class="title-quantity">Số lượng </div>
                     <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus btn-quatity">-</button>
                     <input class="quantity btn-quatity " min="0" name="quantity  " value="1" type="number">
                     <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus btn-quatity">+</button>
                 </div>

                 <div class="detail-quatity ">
                     <div class="btn-add-card">
                         <i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng
                     </div>
                     <div class="btn-add-card buy-now">
                         Mua ngay
                     </div>
                 </div>
                 <div class="detail-quatity border-top py-5 ">
                      
                     <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/67454c89080444c5997b53109072c9e0.png" width='20px' alt="" class="mx-2"> Shopee đảm bảo 
                     <div class="title-quantity mx-4"> 3 Ngày Trả Hàng / Hoàn Tiền  </div>
                 </div>
             </div>
         </div>
         <div class="home-product my-5">
             <div class="header-category">
                 Sản phẩm tương tự
             </div>
             <div class="row sm-gutter">
                 <!-- product item -->
                 <?php

                    $list_pro = $product->getList($detail['proTypeName']);


                    for ($x =  0; $x <=  11; $x += 1) {
                        if(!$list_pro[$x]) break;
                        echo '<div class="col-6 col-md-4 col-lg-3 col-xl-2  ">
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
     </div>

 </div>