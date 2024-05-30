<?php
    include "header.php";
    include "slider.php";
    include "class/sach_class.php"
?>
<?php 
    $sach = new sach;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){     
        $insert_sach = $sach -> insert_sach($_POST, $_FILES);
    }
?>

<div class="admin-content-right">
<div class="admin-content-right-sach-add">
                <h1>Thêm Cuốn sách</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên cuốn sách <span style="color: red;">*</span></label>
                    <input required type="text" name="sach_name">
                    <label for="">Chọn nhà xuất bản<span style="color: red;">*</span></label>
                    <select name="book_id" id="">
                        <option value="#">---Chọn</option>
                        <?php 
                            $show_book = $sach -> show_book();
                            if($show_book) {while($result = $show_book -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['book_id'] ?>"><?php echo $result['book_name'] ?></option>
                        <?php 
                                }
                            }
                        ?>
                    </select>
                    <label for="">Chọn<span style="color: red;">*</span></label>
                    <select name="theloai_id" id="">
                        <option value="">---Chọn Nhà thể loại</option>
                        <?php 
                            $show_theloai = $sach -> show_theloai();
                            if($show_theloai) {while($result =  $show_theloai -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['theloai_id'] ?>"><?php echo $result['theloai_name'] ?></option>
                        <?php 
                                }
                            }
                        ?>
                    </select>
                    <label for="">Nhập ngày xuất bản<span style="color: red;">*</span></label>
                    <input required type="text" name="sach_ngayxuatban">
                    <label for="">Nhập giá sách <span style="color: red;">*</span></label>
                    <input required type="text" name="sach_gia">
                    <label for="">Nhập mô tả <span style="color: red;">*</span></label>
                    <textarea required name="sach_mota" id=""></textarea>
                    <label for="">Thêm hình<span style="color: red;">*</span></label>
                    <input name="sach_hinh" required type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>