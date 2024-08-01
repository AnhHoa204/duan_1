<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 admin__aside">
                <div class="admin__aside-title">
                    Dashboard
                </div>
                <div class="admin__aside-nav">
                    <ul>
                        <li class="<?php if(isset($list_home_active)){echo 'active_color';} ?>"><a href="?act=home"> <i
                                    class="fa-solid fa-house"></i>Trang chủ</a>
                        </li>
                        <li class="<?php if(isset($list_sanpham_active)){echo 'active_color';} ?>"> <a
                                href="./?act=list_sp"> <i class="fa-solid fa-cart-shopping"></i>Sản phẩm</a> </li>
                        <li class="<?php if(isset($list_dm_active)){echo 'active_color';} ?>"> <a href="./?act=list_dm"><i
                                    class="fa-solid fa-list"></i>Danh mục</a></li>
                        <li class="<?php if(isset($list_kh_active)){echo 'active_color';} ?>"> <a href="./?act=dskh"> <i
                                    class="fa-solid fa-user"></i>Khách hàng</a></li>
                        <li class="<?php if(isset($list_tk_active)){echo 'active_color';} ?>"> <a
                                href="./?act=thongke"><i class="fa-solid fa-chart-simple"></i> Thống kê</a></li>
                        <li class="<?php if(isset($list_bl_active)){echo 'active_color';} ?>"> <a href="./?act=dsbl"><i
                                    class="fa-solid fa-comment"></i>Bình luận</a></li>
                        <li class="<?php if(isset($list_dh_active)){echo 'active_color';} ?>"> <a
                                href="./?act=list_donhang"><i class="fa-solid fa-tags"></i>Đơn hàng</a></li>
                        <li> <a href="../?act=home"><i class="fa-solid fa-house-user"></i>Về trang người dùng</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        function changeBackground(currentClick) {
            var list_li = document.querySelectorAll('li');
            for (var i = 0; i < list_li.length; i++) {
                list_li[i].style.backgroundColor = '';
            }
            currentClick.style.backgroundColor = '#c3c4c6';
        }

        document.addEventListener('DOMContentLoaded', function() {
            var listItems = document.querySelectorAll('.admin__aside-nav ul li');
            listItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    changeBackground(this);
                });
            });
        });
    </script>
</body>

</html>
