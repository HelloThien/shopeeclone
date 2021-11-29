class Cart {
  constructor(data) {
    this.data = data;
    this.length = this.data.length;
  }
  renderItemCart(item) {
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });

    return `  
    <a href="/single/detail/${item.productID}"> <li class="header__cart-item">
          <img src="${item.productImage}" class="header__cart-img">
          <div class="header__cart-item-info">
            <div class="header__cart-item-head">
              <h5 class="header__cart-item-name">${item.describlePro}</h5>
              <div class="header__cart-item-price-wrap">
                <span class="header__cart-item-price">${formatter.format(
                  item.price
                )}</span>
                <span class="header__cart-item-multiply">x</span>
                <span class="header__cart-item-qnt">${item.quantity}</span>
              </div>
            </div>
            <div class="header__cart-item-body">
              <span class="header__cart-item-description">
                Phân loại: <span class="header__cart-item-classify">${
                  item.proName
                }</span>
              </span>
              <span class="header__cart-item-remove">Xóa</span>
            </div>
          </div>
        </li></a>
        `;
  }
  fullItemCart(item) {
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });
    return `
    <div class="container     bg-white" dataId="${item.id}" >
				<div class="title-option d-flex justify-content-between h-112   ">
					<div class="w-50 ">
						<div class="item-title-option d-flex ">
							<img src="${item.productImage}" width="60px" height="60px" alt="">
							<div class="cart-name-product px-2 ">${item.describlePro}</div>
						</div>
					</div>
					<div class="d-flex w-50  "  dataId="${item.productID}">
						<div class="item-title-option">${formatter.format(item.price)}</div>
						<div class="item-title-option d-flex align-items-center justify-content-center">
							<button  class="minus btn-quatity fs-6">-</button>
							<input class="quantity btn-quatity   fs-6" min="0" name="quantity  " value="${
                item.quantity
              }" type="number">
							<button     class="plus btn-quatity  fs-6">+</button>
						</div>
						<div class="item-title-option color-price">${formatter.format(
              item.price * item.quantity
            )} </div>
						<div class="item-title-option option-remove " dataId="${item.id}">Xóa </div>
					</div>
				</div>
			</div>`;
  }
  renderItemHistory(item) {
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });
    const status = ["Đang Xác Nhận","Chờ Lấy Hàng", " Đang Giao", "Đã Nhận", "Đã Hủy"];
    return `  
    <div class="item-purchase">
							<div class="item-purchase-info">
								<div class="header__item__purchase d-flex justify-content-between">
									<div class="d-flex align-items-center">
										<i class="fas fa-store-alt  color-active px-2"></i>
										<div class="name-shop">
                    ${item.shopName}
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="ship-status-support color-gr px-2 border-end">
											<i class="fas fa-caravan   "></i> Giao hàng tận nơi
										</div>
										<div class="deliver-stutus  color-active px-2">${status[item.stutus]}</div>

									</div>
								</div>
								<div class="main__item__purchase d-flex align-items-center py-3">
									<div class="main__item__purchase__img">
										<img src=" ${item.productImage}" width="80px" height="80px" alt="">
									</div>
									<div class="main__item__purchase__decript px-3	 w-100">
										<div class="text-hidden">
                    ${item.describlePro}
										</div>
										<div class=" ">
											<div class="  color-active "><i class="fas fa-times px-1"></i>${
                        item.quantity
                      }</div>
											<div class="field-name">
												Phân loại hàng: ${item.proName}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-purchase-total d-flex">
								<div class="d-flex px-2 align-items-center">
									<img class="color-active  " width="20px" height="20px" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/67454c89080444c5997b53109072c9e0.png" alt="">
									<div class=" px-2">Tổng số tiền:</div>
									<div class="color-active fs-5">${formatter.format(
                    item.price * item.quantity
                  )} </div>
								</div>
								<div class="d-flex px-4">
									<a  href="/single/detail/${item.productID}" class="btn-total btn-buy " idPro="${
      item.describlePro
    }">Mua Lại</a>
									<button class="btn-total btn-contac">Liên Hệ Người Bán</button>
								</div>
							</div>
						</div>
        `;
  }
  itemOrderSeller(item) {
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });
    function getRandomInt(max) {
      return Math.floor(Math.random() * max);
    }
    const ship = ["Hàng không", "Nhanh", "Thường", "Đường biển"];
    const status = ["Chưa xác nhận","Chờ lấy hàng", " Đang giao", "Đã nhận", "Đã hủy"];
    const action = ["Lấy Hàng","Giao Hàng", "Đã Nhận"];
    const bg  = ["bg-start","bg-during", "bg-receive"];
    let text = ""
    if(item.status==3){
      text = `<div class="deliver-stutus  color-active px-2"> ${status[item.status]}</div>
       
        `
    }
    else {
      text= `<div class="btn-status  ${bg[item.status]}  " idOrder=" ${item.id}">${action[item.status]} </div>`
    }
    return `  
    <div class="view-item-product py-0">
    <label for="" class="product-checkbox">

    </label>
    <div class="product-list-header-item product-list-header-item-name">
        <div class="main__item__purchase d-flex align-items-center py-3">
            <div class="main__item__purchase__img">
                <img src="${
                  item.productImage
                }" width="60px" height="60px" alt="">
            </div>
            <div class="main__item__purchase__decript px-3	 w-100">
                <div class="text-hidden">
                ${item.describlePro}
                </div>
                <div class="d-flex justify-content-between ">
                    <div class="  color-active "><i class="fas fa-times px-1"></i> ${
                      item.quantity
                    }</div>
                    <div class="field-name d-none">
                        Phân loại hàng: Chân váy
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-list-header-item ">
        <div class="product-item  ">
            <div class="color-active fs-5">${formatter.format(
              item.price * item.quantity
            )}</div>
        </div>
        <div class="product-item ">
            <div class="deliver-stutus  color-active px-2"> ${status[item.status]}</div>
        </div>
        <div class="product-item color-gr ">
           ${ship[getRandomInt(4)]}
        </div>
    </div>
    <div class="product-list-header-item  ">
    ${text}
     </div>
</div>
</div>
        `;
  }
  listOrderSeller(){
    const renderList = this.data.map((el) => {
      return this.itemOrderSeller(el);
    });
    return renderList.join("");
  }
  itemProView(item) {
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });
    function getRandomInt(max) {
      return Math.floor(Math.random() * max);
    }
    let discount = (item.price * (100 - item.productDiscount)) / 100;
    let text = ""
    if(item.productDiscount!=0){
      text = ` <span class="home-product-item__price-old">  ${formatter.format(
        item.price
      )}</span>
      <span class="home-product-item__price-current"> ${formatter.format(
        discount
      )}</span>
       
        `
    }
    else {
      text= ` <span class="home-product-item__price-current"> ${formatter.format(
        item.price
      )}</span>`
    }
    return `  
    <div class="col l-2 m-3 c-6">
		<a class="home-product-item" href="/single/detail/${item.productID}">
		<div class="home-product-item-img" style="background-image: url(' . $list_pro[$x]['productImage'] . ')">
		</div>
		<h4 class="home-product-item-name"> ${item.describlePro}</h4>
		<div class="home-product-item__price">
    
    ${text}
    </div>
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
			<span class="home-product-item__sold">${item.sold}  đã bán</span>
		</div>
		<div class="home-product-item__origin">
			<span class="home-product-item__brand"> </span>
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
</div>
        `;
  }
  listProView(){
    const renderList = this.data.map((el) => {
      return this.itemOrderSeller(el);
    });
    return renderList.join("");
  }
  itemProductShop(item) {
    function getRandomInt(max) {
      return Math.floor(Math.random() * max);
    }
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });
    function kFormatter(num) {
      return Math.abs(num) > 999
        ? Math.sign(num) * (Math.abs(num) / 1000).toFixed(1) + "k"
        : Math.sign(num) * Math.abs(num);
    }
    let discount = (item.price * (100 - item.productDiscount)) / 100;

    return `
               <div class="item-product-view col-2">
                                                        <div  class="link-item-product">
                                                            <div class="cotainer-item-product">
                                                                <div class="img-item-product">
                                                                    <img class="" src=" ${
                                                                      item.productImage
                                                                    }" alt="">
                                                                </div>
                                                                <div class="content-item-product">
                                                                    <div class="title-item-product">
                                                                    ${
                                                                      item.describlePro
                                                                    }
                                                                    </div>
                                                                    <div class="price-item-product d-flex ">
                                                                        <div class="cur-price-item">
                                                                        ${formatter.format(
                                                                          discount
                                                                        )}
                                                                        </div>
                                                                        <div class="sold-item-product">
                                                                            Kho hàng:  ${getRandomInt(
                                                                              1000
                                                                            )}
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-item-product d-flex ">
                                                                        <div class="sold-item-product">
                                                                        <i class="fas fa-eye"></i> ${getRandomInt(
                                                                          1000
                                                                        )}
                                                                        </div>
                                                                        <div class="sold-item-product">
                                                                        <i class="far fa-heart"></i>  ${getRandomInt(
                                                                          1000
                                                                        )}
                                                                        </div>
                                                                        <div class="sold-item-product">
                                                                             Đã bán: ${kFormatter(
                                                                               item.sold
                                                                             )}
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-action-product  d-flex " idPro="${
                                                                      item.productID
                                                                    }">
                                                                        <div class="action-icon-product border-action-right edit-pro">
                                                                        <i class="far fa-edit"></i>
                                                                        </div>
                                                                        <div class="action-icon-product del-pro">
                                                                        <i class="far fa-trash-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    `;
  }
  renderListItemShop() {
    const renderList = this.data.map((el) => {
      return this.itemProductShop(el);
    });
    return renderList.join("");
  }
  renderListHistory() {
    const renderList = this.data.map((el) => {
      return this.renderItemHistory(el);
    });
    return renderList.join("");
  }
  renderListFull() {
    const renderList = this.data.map((el) => {
      return this.fullItemCart(el);
    });
    return renderList.join("");
  }
  renderListCart() {
    const renderList = this.data.map((el) => {
      return this.renderItemCart(el);
    });
    return renderList.join("");
  }

  insertItem(item) {
    this.data.push(item);

    this.length = this.length + 1;
  }
  removeItem(id) {
    const newData = this.data.filter((el) => {
      return el.productID != id;
    });
    this.data = newData;
  }
  decreaItem(id) {
    let result = true;
    const newData = this.data.map((el) => {
      if (el.id === id && el.quantity <= 1) result = false;
      else if (el.id === id) el.quantity--;
      return el;
    });
    this.data = newData;
    return result;
  }
  increaItem(id) {
    let result = true;
    const newData = this.data.map((el) => {
      if (el.id === id) el.quantity++;
      return el;
    });
    this.data = newData;
    return result;
  }
  total() {
    const formatter = new Intl.NumberFormat("vi-VN", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });
    const result = this.data.reduce((pre, cur) => {
      return pre + cur.price * cur.quantity;
    }, 0);

    return formatter.format(result);
  }
  addList(data) {
    this.data = data;
    this.length = data.length;
  }
  clear() {
    this.data = [];
  }
}
async function getSelectType() {
  let subType = [];
  function checkSubType(id, SubType) {
    return SubType.find((el) => el.proTypeName === id.trim());
  }
  function itemType(id, value) {
    return ` <li id="${id}">${value}</li>`;
  }
  function listSubItem(type, subTypes) {
    let newSubType = subType.filter((el) => {
      return el.proTypeName.trim() === type.trim();
    });
    newSubType = newSubType.map((el) => {
      return itemType(el.proCode, el.proName);
    });
    $(".list-subtype").html(newSubType.join(""));
  }
  await $.get("/single/api/product/subtype", function (data, status) {
    let listType = data.map((el) => {
      return itemType(el.productTypeCodeName, el.productTypeName);
    });
    $(".list-type").html(listType.join(""));
  });
  await $.get("/single/api/product/type", function (data, status) {
    subType = data;
  });
  $(".dropdown").click(function () {
    $(this).attr("tabindex", 1).focus();
    $(this).toggleClass("active");
    $(this).find(".dropdown-menu").slideToggle(300);
  });
  $(".dropdown").focusout(function () {
    $(this).removeClass("active");
    $(this).find(".dropdown-menu").slideUp(300);
  });
  $(document).on("click", ".dropdown .dropdown-menu li", function () {
    $(this).parents(".dropdown").find("span").text($(this).text());
    $(this)
      .parents(".dropdown")
      .find("input")
      .attr("value", $(this).attr("id"));
    if (checkSubType($(this).attr("id"), subType))
      listSubItem($(this).attr("id"), subType);
  });
  /*End Dropdown Menu*/

  $(".dropdown-menu li").click(function () {
    var input =
        "<strong>" +
        $(this).parents(".dropdown").find("input").val() +
        "</strong>",
      msg = '<span class="msg">Hidden input value: ';
    $(".msg").html(msg + input + "</span>");
  });
}
