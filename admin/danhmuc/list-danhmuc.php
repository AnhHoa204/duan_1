
<div class="col-md-10 admin__article">
                
    <h3>Danh sách danh mục sản phẩm</h3>
    <a href="?act=add_dm" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dsdm as $key => $value): ?>
            <tr>
                <th scope="row"><?php echo $key + 1; ?></th>
                <td><?php echo $value['ten_danhmuc']; ?></td>
                <td>
                    <a href="?act=edit_dm&iddm=<?php echo $value['id']; ?>" class="btn btn-warning">Sửa</a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không? Hành động này không thể hoàn tác')" class="btn btn-danger" href="?act=delete_dm&iddm=<?php echo $value['id']; ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
            </div>