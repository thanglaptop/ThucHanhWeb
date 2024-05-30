<?php
    include "header.php";
    include "slider.php";
    include "class/category_class.php";
?>

<?php
$category = new category;
    if(!isset($_GET['book_id']) || $_GET['book_id']==NULL){
        echo "<script>window.location = 'categorylist.php'</script>";
    }
    else{
        $book_id = $_GET['book_id'];
    }
    $get_cartegory = $category -> get_cartegory($book_id);
    if($get_cartegory){
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $category_name = $_POST['category_name'];
        $update_category = $category -> update_category($category_name,  $book_id);
    }
?>

<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Sửa sách</h1>
                <form action="" method="POST">
                    <input name = "category_name" type="text" placeholder="Nhập tên danh mục" 
                    value="<?php echo $result['book_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>