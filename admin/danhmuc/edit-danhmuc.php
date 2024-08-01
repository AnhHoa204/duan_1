<div class="col-md-10 admin__article">
<div class="col-md-8">
    <h3>Sửa danh mục sản phẩm</h3>
    <form action="?act=edit_dm" method="post">     
    <div class="mb-3">
        <input type="hidden" value="<?php echo $list['id']; ?>" name="iddm" />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" value="<?php echo $list['ten_danhmuc']; ?>" name="tendm" placeholder="Nhập tên danh mục" />
        </div>
        <button type="submit" class="btn btn-warning" name="btn_update">Sửa</button>
    </form>   
</div>
</div>
