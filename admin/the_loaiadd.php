<?php
    include "header.php";
    include "slider.php";
    include "class/theloai_class.php";
?>

<?php
    $theloai = new theloai;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $book_id = $_POST['book_id'];
        $theloai_name = $_POST['theloai_name'];
        $insert_theloai = $theloai -> insert_theloai($book_id, $theloai_name);
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
                            if($show_book){
                                while($result = $show_book -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['book_id'] ?>"> <?php echo $result['book_name'] ?></option>
                        <?php
                                }
                            }
                        ?>
                    </select> <br>
                    <input required name = "theloai_name" type="text" placeholder="Nhập tên">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>