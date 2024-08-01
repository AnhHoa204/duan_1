<div class="col-md-10 admin__article">
<div class="add__product">
    <?php 
        if(is_array($show_one_sp)){
            extract($show_one_sp);
        }
    ?>
    <h1>Sửa sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="ten_sp" value="<?=$ten_sp?>" />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Giá</label>
            <input type="text" class="form-control" name="gia" value="<?=$gia?>" />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="mo_ta" value="<?=$mo_ta?>" />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="so_luong" value="<?=$so_luong?>" />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Chi tiết</label>
            <input type="text" class="form-control" name="chi_tiet" value="<?=$chi_tiet?>" />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Hình ảnh</label>
            <img src="../upload/img/sanpham/<?=$hinh_anh?>" alt=""
                style="width: 100px;height: 100px;margin-bottom: 10px">
            <input type="file" class="form-control" name="hinh_anh" />
        </div>
        <div class="form-group">
            <p for="">Danh mục</p>
            <select name="danh_muc" id="">
                <?php
            foreach($list_dm as $danhmuc):?>
                <option value="<?= $danhmuc['id'] ?>" <?php if($danhmuc['id']==$id_dm){echo 'selected';} ?>>
                    <?=$danhmuc['ten_danhmuc'] ?></option>
                <?php endforeach; ?>
            </select>

        </div>
        <input type="submit" value="Sửa sản phẩm" name="btn_editsp" class="btn__addsp">


    </form>
</div>
            </div>