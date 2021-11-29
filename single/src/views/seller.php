<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenh nguoi ban</title>
    <link rel="stylesheet" href="public/fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/single/public/css/seller.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $config['url'] ?>/public/css/account.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="app-container">
        <div class="header-bar">
            <div class="header-content">
                <div class="header-item"><span class="logo-s">S</span></div>
                <div class="header-item   w-75 ">
                    <div class="content-box ">Trang chủ > Tất cả sản phẩm </div>
                </div>
                <div class="header-item">
                    <div class="account-infor d-flex">
                        <img class="account-img" src="<?php echo $dataUser['img'] ?>" alt="">
                        <div class="account-name">
                            <?php echo $dataUser['cusName'] ?>
                        </div>
                    </div>
                </div>
                <div class="header-item">
                    <div class="header-action d-flex">
                        <img class="action-icon" src="https://img.icons8.com/ios-glyphs/30/000000/circled-menu.png" />

                        <i class="far fa-bell action-icon "></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-container">
            <div class="sidebar">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-box">
                        <div class="sidebar-item">
                            <img class="sidebar-menu-item-icon" src="https://cf.shopee.vn/file/f82f8ccb649afcdf4f07f1dd9c41bcb0" alt="">
                            <span class="sidebar-menu-item-text">Quản Lý Sản phẩm </span>
                            <span class="sidebar-menu-item-space"></span>
                            <img class="sidebar-menu-item-collapse  " src="https://img.icons8.com/external-those-icons-lineal-those-icons/24/000000/external-down-arrows-those-icons-lineal-those-icons-1.png" />
                        </div>
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu-item   acive-link-submenu">
                                Tất cả sản phẩm
                            </li>
                            <li class="sidebar-submenu-item">
                                Thêm sản phẩm
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-menu-box">
                        <div class="sidebar-item">
                            <img class="sidebar-menu-item-icon" src="https://cf.shopee.vn/file/c15905d5a6284687c4a6ad00d0feb511" alt="">
                            <span class="sidebar-menu-item-text">Quản Lý Đơn Hàng</span>
                            <span class="sidebar-menu-item-space"></span>
                            <img class="sidebar-menu-item-collapse" src="https://img.icons8.com/external-those-icons-lineal-those-icons/24/000000/external-down-arrows-those-icons-lineal-those-icons-1.png" />
                        </div>
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu-item ">
                                Tất cả
                            </li>
                            <li class="sidebar-submenu-item">
                                Lịch sử đơn hàng
                            </li>
                            <li class="sidebar-submenu-item">
                                Trả hàng/hoàn tiền
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-box">
                        <div class="sidebar-item">
                            <img class="sidebar-menu-item-icon" src="https://cf.shopee.vn/file/f82f8ccb649afcdf4f07f1dd9c41bcb0" alt="">
                            <span class="sidebar-menu-item-text">Quản Lý Shop </span>
                            <span class="sidebar-menu-item-space"></span>
                            <img class="sidebar-menu-item-collapse  " src="https://img.icons8.com/external-those-icons-lineal-those-icons/24/000000/external-down-arrows-those-icons-lineal-those-icons-1.png" />
                        </div>
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu-item    ">
                                Thông tin shop
                            </li>


                        </ul>
                    </li>
                </ul>
            </div>
            <div class="page-container">
                <div class="page-content-wrapper">
                    <div class="app-main-panel  ">
                        <div class="product-list-main   ">
                            <div class="shopee-fixed-top-card">
                                <div class="fixed-container">
                                    <div class="portal-panel">
                                        <div class="list-portal">
                                            <div class="tab-item active">Tất cả</div>
                                            <div class="tab-item">Đang hoạt động</div>
                                            <div class="tab-item">Hết hàng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-panel  ">
                                <div class="list-all">
                                    <div class="prodcut-list-header">
                                        <div class="d-flex">
                                            <div class="grid-left">
                                                <div class="title-box">
                                                    <div class="page-title-box">
                                                        <div class="page-title">
                                                            <span id="total-product">0</span> Product
                                                        </div>
                                                        <div class="percent-box">
                                                            <div class="percent-bar">
                                                                <div class="percent-bar-progress">

                                                                </div>
                                                            </div>
                                                            <div class="percent-des">
                                                                Có thể đăng tải thêm 500 sản phẩm
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-right">
                                                <button class="add-product d-none">
                                                    <i class="fas fa-plus px-1"></i> Thêm 1 sản phẩm mới
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-and-pagination-wrap d-none">
                                        <div class="product-list-container">
                                            <div class="product-list-view">
                                                <div class="shopee-fixed-top-card d-none">
                                                    <div class="fixed-cotainer" style="top: 110px; z-index: 999;">
                                                        <div class="product-list-header">
                                                            <label for="" class="product-checkbox">

                                                            </label>
                                                            <div class="product-list-header-item product-list-header-item-name">
                                                                Tên sản phẩm
                                                            </div>
                                                            <div class="product-list-header-item ">
                                                                <div class="product-item  ">
                                                                    Danh mục
                                                                </div>
                                                                <div class="product-item ">
                                                                    Phân loại
                                                                </div>
                                                                <div class="product-item  ">
                                                                    Giá
                                                                </div>
                                                                <div class="product-item  ">
                                                                    Đã bán
                                                                </div>
                                                            </div>
                                                            <div class="product-list-header-item  ">
                                                                Sửa thông tin
                                                            </div>
                                                        </div>
                                                        <div class="product-no-result d-none">
                                                            <div class="sprites-product-list-no-product">
                                                                <div class="">
                                                                    Không tìm thấy sản phẩm
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="view-list-product d-none">
                                                            <div class="view-item-product">
                                                                <label for="" class="product-checkbox">

                                                                </label>
                                                                <div class="product-list-header-item product-list-header-item-name">
                                                                    Tên sản phẩm
                                                                </div>
                                                                <div class="product-list-header-item ">
                                                                    <div class="product-item  ">
                                                                        Danh mục
                                                                    </div>
                                                                    <div class="product-item ">
                                                                        Phân loại
                                                                    </div>
                                                                    <div class="product-item  ">
                                                                        Giá
                                                                    </div>
                                                                    <div class="product-item  ">
                                                                        Đã bán
                                                                    </div>
                                                                </div>
                                                                <div class="product-list-header-item  ">
                                                                    Sửa thông tin
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="shopee-fixed-top-card">
                                            <div class="fixed-cotainer" style="top: 110px; z-index: 999;">
                                                <div class="list-item-product-view">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="product-list-main d-none">
                            <div class="container">
                                <div class="header-profile px-4">
                                    <div class="fs-5	">Thêm 1 sản phẩm mới </div>
                                    <div class="percent-des">Vui lòng chọn ngành hàng phù hợp cho sản phẩm của bạn.</div>
                                </div>
                                <div class="main-profile row py-4">
                                    <div class="col  px-5">
                                        <form action="" class="form-add ">


                                            <div class="product-name-edit">
                                                <div class="label-product">
                                                    Tên Sản Phẩm:
                                                </div>
                                                <div class="input-wrap">
                                                    <div class="product-edit-form-item-content">
                                                        <input type="text" class="" placeholder="Nhập vào" name="describlePro">
                                                        <div class="input__suffix">
                                                            <span class="shopee-input__suffix-split"></span>0/120
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-name-edit">
                                                <div class="label-product">
                                                    Danh Mục
                                                </div>
                                                <div class="input-wrap">
                                                    <div class="dropdown">
                                                        <div class="select">
                                                            <span>Danh mục </span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="productCode">
                                                        <ul class="dropdown-menu list-type">
                                                        </ul>
                                                    </div>
                                                    <div class="dropdown">
                                                        <div class="select">
                                                            <span>Loại sản phẩm </span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="proCode">
                                                        <ul class="dropdown-menu list-subtype">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name-edit">
                                                <div class="label-product">
                                                    Giá
                                                </div>
                                                <div class="input-wrap">
                                                    <div class="product-edit-form-item-content w-50">
                                                        <input type="number" class="" placeholder="Nhập vào" name="price">
                                                        <div class="input__suffix">
                                                            <span class="shopee-input__suffix-split"></span>đ
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name-edit">
                                                <div class="label-product">
                                                    Giảm giá
                                                </div>
                                                <div class="input-wrap">
                                                    <div class="product-edit-form-item-content w-50">
                                                        <input type="text" class="" placeholder="Nhập vào" name="productDiscount">
                                                        <div class="input__suffix">
                                                            <span class="shopee-input__suffix-split"></span>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name-edit">
                                                <div class="label-product">
                                                    Kho Hàng
                                                </div>
                                                <div class="input-wrap">
                                                    <div class="product-edit-form-item-content w-50">
                                                        <input type="text" class="w-50" placeholder="Nhập vào" name="quantity">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name-edit">
                                                <div class="label-product">
                                                    Hình Ảnh
                                                </div>
                                                <div class="input-wrap">
                                                    <div class="product-edit-form-item-content">
                                                        <input type="text" class="" placeholder="Nhập vào" name="productImage">
                                                        <div class="input__suffix">
                                                            <span class="shopee-input__suffix-split"></span>link
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-name-edit">
                                                <div class="label-product">

                                                </div>
                                                <div class="input-wrap">
                                                    <button class="field-input w-25 col-9  rounded color-white btn-save btn-add-pro " value=""> Thêm </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="product-list-main  d-none ">
                            <div class="shopee-fixed-top-card">
                                <div class="fixed-container">
                                    <div class="portal-panel">
                                        <div class="list-portal order-action">
                                            <div class="tab-item active" idaction="10">Tất cả</div>
                                            <div class="tab-item" idaction="1"> Chờ lấy hàng </div>
                                            <div class="tab-item" idaction="2">Đang giao </div>
                                            <div class="tab-item" idaction="3">Đã nhận </div>
                                            <div class="tab-item" idaction="4"> Đã hủy </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-panel  ">
                                <div class="list-all">
                                    <div class="prodcut-list-header">
                                        <div class="d-flex">
                                            <div class="grid-left">
                                                <div class="title-box">
                                                    <div class="page-title-box">
                                                        <div class="page-title">
                                                            <span id="total-order">0</span> Đơn hàng
                                                        </div>
                                                        <div class="percent-box">
                                                            <div class="percent-bar">
                                                                <div class="percent-bar-progress">

                                                                </div>
                                                            </div>
                                                            <div class="percent-des">
                                                                Có thể tối đa 500 đơn hàng
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-right">
                                                <button class="add-product d-none">
                                                    <i class="fas fa-plus px-1"></i> Thêm 1 sản phẩm mới
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-and-pagination-wrap  ">
                                        <div class="product-list-container">
                                            <div class="product-list-view">
                                                <div class="shopee-fixed-top-card  ">
                                                    <div class="fixed-cotainer" style="top: 110px; z-index: 999;">
                                                        <div class="product-list-header">
                                                            <label for="" class="product-checkbox">

                                                            </label>
                                                            <div class="product-list-header-item product-list-header-item-name">
                                                                Sản phẩm
                                                            </div>
                                                            <div class="product-list-header-item ">
                                                                <div class="product-item  ">
                                                                    Tổng đơn hàng
                                                                </div>
                                                                <div class="product-item ">
                                                                    Trạng thái
                                                                </div>
                                                                <div class="product-item ">
                                                                    Vận chuyển
                                                                </div>
                                                            </div>
                                                            <div class="product-list-header-item  ">
                                                                Thao tác
                                                            </div>
                                                        </div>
                                                        <div class="product-no-result  d-none ">
                                                            <div class="sprites-product-list-no-product">
                                                                <div class="">
                                                                    Không tìm thấy sản phẩm
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="view-list-product view-list-order ">
                                                        <div class="view-item-product">
                                                                <label for="" class="product-checkbox">

                                                                </label>
                                                                <div class="product-list-header-item product-list-header-item-name">
                                                                    <div class="main__item__purchase d-flex align-items-center py-3">
                                                                        <div class="main__item__purchase__img">
                                                                            <img src="https://cf.shopee.vn/file/a4655c7f423ced5b2fcfb3295114cb29" width="60px" height="60px" alt="">
                                                                        </div>
                                                                        <div class="main__item__purchase__decript px-3	 w-100">
                                                                            <div class="text-hidden">
                                                                                SET LUCY BABYDOLL + CHÂN VÁY. SET VÁY JAMOO (ảnh thật/sẵn)
                                                                            </div>
                                                                            <div class="d-flex justify-content-between ">
                                                                                <div class="  color-active "><i class="fas fa-times px-1"></i> 3</div>
                                                                                <div class="field-name">
                                                                                    Phân loại hàng: Chân váy
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-list-header-item ">
                                                                    <div class="product-item  ">
                                                                        <div class="color-active fs-5">360.000&nbsp;₫ </div>
                                                                    </div>
                                                                    <div class="product-item ">
                                                                        <div class="deliver-stutus  color-active px-2">Chưa xác nhận</div>
                                                                    </div>
                                                                    <div class="product-item color-gr ">
                                                                        Nhanh
                                                                    </div>
                                                                </div>
                                                                <div class="product-list-header-item  ">
                                                                    <a href="#" class="btn-status   " idpro=" ">Lấy hàng </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="product-list-main d-none">

                        </div>
                        <div class="product-list-main d-none">

                        </div>
                         
                        <div class="product-list-main d-none">
                            <div class="container">
                                <div class="header-profile">
                                    <div class="fs-5	"> Thông tin của shop </div>
                                    <div class="">Hãy thêm một vài mô tả về shop</div>
                                </div>
                                <div class="main-profile row py-4">
                                    <div class="col-8 px-5">
                                        <form action="">
                                            <div class="field-profile row align-items-center py-3">
                                                <div class="field-name col-3 px-3">
                                                    Tên Tài Khoản
                                                </div>
                                                <input autocomplete="on" class="field-input col-9" value=" "   name="shopname" />
                                            </div>
                                           
                                            <div class="field-profile row align-items-center py-3">
                                                <div class="field-name col-3 px-3">
                                                    Mô tả về shop 
                                                </div>
                                                <input autocomplete="on" class="field-input col-9" type="textarea"   name="shopname" />
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $config['url'] ?>/public/js/function.js"> </script>
    <script>
        $(document).ready(function() {
            const itemSides = $('.sidebar-item')
            const boxSubs = $('.sidebar-submenu')
            const links = $('.sidebar-submenu-item')
            const active = $('.tab-item')
            const products = new Cart([])
            const panels = $('.product-list-main')



            itemSides.each((index, el) => {
                const boxSub = boxSubs[index]

                $(el).click(function() {

                    const down = $(this).children('.sidebar-menu-item-collapse')
                    down.toggleClass('rotate-180')
                    $(boxSub).toggle()
                })
            })
            links.each((index, el) => {
                const panel = panels[index]
                $(el).click(function() {
                    panels.addClass('d-none')
                    $(panel).removeClass('d-none')
                    links.removeClass('acive-link-submenu')
                    $(this).addClass('acive-link-submenu')
                    $('.content-box').text(`Trang chủ > ${$(this).text()}`)
                })
            })
            active.each((index, el) => {
                $(el).click(function() {
                    $('.tab-item.active').removeClass('active')
                    $(this).addClass('active')
                })
            })


            async function getJSONAsync() {

                // The await keyword saves us from having to write a .then() block.
                let json = await $.get('/single/api/product/shop', function(data, status) {

                    products.addList(data)
                    const total = products.length
                    x = total
                    $('#total-product').html(total)
                   
                    $('#total-product').parent().next().find('.percent-bar-progress').css('width', `${total/5 +5}%`)
                    $('.list-item-product-view').html(products.renderListItemShop())

                })



            }
            getJSONAsync()





            getSelectType()



            $('.btn-add-pro').click(function(e) {
                e.preventDefault()

                let field = $('.form-add').find('input')
                let product = {}
                let isValid = true
                field.each((index, el) => {
                    product[$(el).attr('name')] = $(el).val()
                    switch ($(el).attr('name').trim()) {
                        case "describlePro":
                            if ($(el).val().length < 10) isValid = false
                            break
                        case "2":
                            break

                    }
                })

                if (isValid) {
                    $.post('/single/api/product/insertone', {
                        ...product
                    }, function(data, status) {
                        window.location.href = "/single/seller"
                    })
                }
            })

             function renderOrder(status){
                $.get('/single/api/order/seller',function(data,sta){
                    let newData =[]
                    const total = data.length
                    x = total
                    $('#total-order').html(total)
                   
                    $('#total-order').parent().next().find('.percent-bar-progress').css('width', `${total/5 +5}%`)
                    if(status!=10) newData  =data.filter(el=>el.status==status)
                    else newData =data 
                const order = new Cart(newData)
                
                const html = order.listOrderSeller()
                $('.view-list-order').html(html)

            })
             }
             renderOrder(10)
             const orderAction = $('.order-action').children()
             orderAction.each((index,el)=>{
                $(el).click(function(){
                    let id = $(this).attr('idaction')
                   console.log(id)
                    renderOrder(id)
                })
             })
              
             $(document).on('click', '.btn-status', function() {
                let id = $(this).attr('idorder').trim()
                alert("Bạn có chắc chắn làm điều này không?")

                $.post('/single/api/order/changestatus', {
                    id: id
                }, function(data, success) {
                   
                })
                renderOrder()
            })
            $(document).on('click', '.del-pro', function() {
                let id = $(this).parent().attr('idPro')
                alert("Bạn có muốn xóa sản phẩm này không ?")
                $.post('/single/api/product/removepro', {
                    idpro: id
                }, function(data, success) {
                    window.location.href = "/single/seller"
                })
            })
            $(document).on('click', '.edit-pro', function() {

            })
        })
    </script>
</body>

</html>