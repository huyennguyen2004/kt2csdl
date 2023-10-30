<?php require_once'header.php';?>
<form action="process.php" method="post" enctype="multipart/form-data">
<div class=card>
         <div class="card-header">
             <div class="row">
                 <div class="col-6">
                     <strong>Thêm thương hiệu</strong>
                    </div>
                 <div class="col-6 text-end">
                     <a class="btn btn-sm btn-info"href="index.php">Về danh sách</a>
                     <button type="submit" name="them" class="btn btn-sm btn-success">Lưu</button>
                 </div>
             </div>
         </div>
         <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label for="slug">Tên thương hiệu</label>
                    <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="col-md-3">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" class="form-control"></textarea>
                </div>
            </div>

        

                <div class="col-md-3">  
                <div class="col-md-3">
                <label for="image">Hình</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-3">
                <label for="sort_order">Sắp xếp</label>
                <select name="sort_order" id="sort_order" class="form-control">
                    <option value="1">None</option>
                </select>
                </div>
                <div class="col-md-3">
                <label for="status">trạng thái</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">xuất bản</option>
                    <option value="2">chưa xuất bản</option>
                </select>
                </div>

                </div>
            </div>
         </div>
     </div>
</form>
     <?php require_once'footer.php';?>