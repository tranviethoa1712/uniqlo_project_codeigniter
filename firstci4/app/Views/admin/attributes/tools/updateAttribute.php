<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <table>
            <!-- nhét thêm id vào để xuly.php biết đang sửa ở id nào -->
            <form method="post" class="form-inline">
                <?php
                foreach($attribute as $row):
                ?>
                    <tr>
                        <td>Tiêu đề</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="name_update"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Tên danh mục</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['attribute_sku'] ?>" name="code_update"></td>
                    </tr>
                    <tr>
                        <td>Tên danh mục</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['unit'] ?>" name="unit_update"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-primary" name="updateAttribute" value="Sửa thuộc tính"></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </form>
        </table>
    </div><!-- /.container-fluid -->
</section>
