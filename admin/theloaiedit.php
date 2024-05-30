<?php
    include "header.php";
    include "slider.php";
    include "class/theloai_class.php";
?>

<?php
    $theloai = new theloai;
    $theloai_id= $_GET['theloai_id'];
    $get_theloai = $theloai -> get_theloai($theloai_id);
    if($get_theloai){
        $resultA = $get_theloai -> fetch_assoc();
    }


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $book_id = $_POST['book_id'];
        $theloai_name = $_POST['theloai_name'];
        $update_theloai = $theloai -> update_theloai($book_id, $theloai_id, $theloai_name);
    }
?>
<style>
    select{
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm Loại</h1> <br>
                <form action="" method="POST">
                    <select name="book_id" id="">
                        <option value="">Chọn danh mục</option>
                        <?php
                            $show_book = $theloai ->show_book();
                            if($show_book){while($result = $show_book -> fetch_assoc()){
                        ?>
                        <option <?php if($resultA['book_id']==$result['book_id']) {echo "SELECTED";}?> value="<?php echo $result['book_id'] ?>"> <?php echo $result['book_name'] ?></option>
                        <?php
                                }
                            }
                        ?>
                    </select> <br>
                    <input required name = "theloai_name" type="text" placeholder="Nhập tên" 
                    value="<?php echo $resultA['theloai_name']?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>