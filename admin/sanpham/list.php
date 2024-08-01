<div class="col-md-10 admin__article">
<div class="list__product">
    <button class="btn btn-success"><a href="../admin/index.php?act=add_sp">Thêm sản phẩm</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên </th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach($showsp as $sp):?>
            <tr>
                <th scope="row"><?=$sp['id']?></th>
                <td><?=$sp['ten_sp']?></td>
                <td><?=$sp['gia']?></td>
                <td><?=$sp['mo_ta']?></td>
                <td><?=$sp['so_luong']?></td>

                <td><?=$sp['chi_tiet']?></td>
                <td><img src="../upload/img/sanpham/<?=$sp['hinh_anh']?>" alt="" style="width: 90px;height: 90px;"></td>

                <td><?=$sp['ten_danhmuc']?></td>
                <td>
                    <button class="btn btn-warning"><a href="?act=edit_sp&id=<?=$sp['id']?>">Sửa</a>
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger">
                        <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không')"
                            href="?act=delete_sp&id=<?=$sp['id']?>">Xóa</a>
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
            </div>