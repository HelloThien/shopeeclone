$(document).ready(function () {
  $.get("/single/api/order/cart", function (data, status) {
    if(data==="cut ngay") data=[]
    
    const cart = new Cart(data);
    $(".header__cart-notice").text(cart.length);
    const noItem = `<img src="/single/public/img/no_cart.png" alt="" class="header__cart-no-cart-img">
                     <p class="header__cart-no-cart-msg">
                        Chưa có sản phẩm
                    </p>`;

    if (cart.length) $(".header__cart-list-item").html(cart.renderListCart());
    else $(".header__cart-list").html(noItem);
    $(".btn-add-card").click(function () {
      let idPro = $(".detail-title").attr("idProduct");
      let idOrder = $('.idCart').attr('idCart')
      let quatity = $(".quantity").val();
       
      idOrder = idOrder.trim();
      $.post(
        "/single/api/order/addcart",
        {
          quantity: quatity,
          productId: idPro,
          orderId: idOrder,
        },
        function (data, status) {
          if(data==="cut ngay") window.location.href = "/single/login"
          else if (data === "fail") alert("Sản phẩm đã có trong giỏ hàng!");
          else {
            let item = {
              describlePro: $(".detail-title").text(),
              price: $(".data-price").text(),
              proName: $(".detail-proName").text(),
              productImage: $(".detail-img img").attr("src"),
              quantity: $(".quantity ").val(),
            };

            cart.insertItem(item);
             
            $(".header__cart-list-item").html(cart.renderListCart());
            $(".header__cart-notice").text(cart.length);
            alert("Đã thêm vào giỏ hàng")
          }
        }
      );
    });
  });
  $(' .header__cart-list button').click(function()
  {  
    window.location.href = "/single/cart" })
});
 
