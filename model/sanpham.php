<?php
    //Hàm thêm sản phẩm
    function add_sp($ten_sp,$gia,$mo_ta,$so_luong,$chi_tiet,$hinh_anh,$id_dm){
        $sql="insert into san_pham(ten_sp,gia,mo_ta,so_luong,chi_tiet,hinh_anh,id_dm)
            values(?,?,?,?,?,?,?)";
        pdo_execute($sql,$ten_sp,$gia,$mo_ta,$so_luong,$chi_tiet,$hinh_anh,$id_dm);
    }
    //Lấy tất cả sản phẩm trong bảng 
    function load_all_sp(){
        $sql= "select * from san_pham";
        return pdo_query($sql); 
    }
    //Lấy sản phẩm và danh mục
    function load_sp_dm(){
        $sql='SELECT san_pham.*,danhmuc.ten_danhmuc FROM san_pham JOIN danhmuc ON san_pham.id_dm=danhmuc.id';
        return pdo_query($sql);
    }
    //lấy sản phẩm theo id
    function get_one_sp($id){
        $sql= "select * from san_pham where id=?";
        return pdo_query_one($sql,$id); 
    }
    //Update sản phẩm
    function update_sp($id,$ten_sp,$gia,$mo_ta,$so_luong,$chi_tiet,$hinh_anh,$id_dm){
        $sql= "update san_pham set ten_sp=?, gia=?, mo_ta=?, so_luong=?,
            chi_tiet=?, hinh_anh=?, id_dm=? where id=?";
            pdo_execute($sql,$ten_sp,$gia,$mo_ta,$so_luong,$chi_tiet,$hinh_anh,$id_dm, $id);
    }
    //Xóa sản phẩm
    function delete_sp($id){
        $sql= "delete from san_pham where id=?";
        pdo_execute($sql,$id);

    }
    //Lấy sản phẩm mới
    function load_sp_new(){
        $sql= "select * from `san_pham` ORDER BY id DESC LIMIT 0,4";
        return pdo_query($sql);
    }
    // lấy sản phẩm có view nhiều nhất
    function get_sp_view_top4(){
        $sql= "select * from san_pham order by luot_xem desc limit 4";
        return pdo_query($sql);
    }
    // lấy tên sản phẩm và ảnh
    function get_tensp_img($id_sp){
        $sql= "select san_pham.ten_sp, san_pham.hinh_anh from san_pham where id=?";
        return pdo_query_one($sql,$id_sp);
    }
    
    function tangview($idsp){
        $sp = get_one_sp($idsp);
        $view = $sp['luot_xem'] + 1;
        $sql = "update san_pham set luot_xem = '$view' where id = $idsp";
        pdo_execute($sql);
    }

    function sp_lienquan($idsp){
        $sp = get_one_sp($idsp);
        $iddm = $sp['id_dm'];
        $sql = "select * from san_pham where id_dm = $iddm and id <> $idsp limit 0, 3";
        $result = pdo_query($sql);
        return $result;
    }

    function searchsp_danhmuc($iddm){
        $sql = "select * from san_pham where id_dm = $iddm";
        $result = pdo_query($sql);
        return $result;
    }
    // tìm kiếm sản phẩm theo tên
    function search_tensp($name){
        $sql = "select * from san_pham where ten_sp like '%$name%' ";
        $result = pdo_query($sql);
        return $result;
    }
    // tìm kiếm sản phẩm theo giá
    function search_gia1sp(){
        $sql = "select * from san_pham where gia >= 100000 and gia <= 200000";
        $result = pdo_query($sql);
        return $result;
    }
    function search_gia2sp(){
        $sql = "select * from san_pham where gia >= 200000 and gia <= 300000";
        $result = pdo_query($sql);
        return $result;
    }
    function search_gia3sp(){
        $sql = "select * from san_pham where gia >= 300000 and gia <= 500000";
        $result = pdo_query($sql);
        return $result;
    }
?>