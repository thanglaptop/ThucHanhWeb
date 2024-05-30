<?php
    include "class/category_class.php";
    $category = new category;
    if(!isset($_GET['sach_id']) || $_GET['sach_id']==NULL){
        echo "<script>window.location = 'sachlist.php'</script>";
    }
    else{
        $book_id = $_GET['book_id'];
    }
    $delete_cartegory = $category -> delete_cartegory($book_id);

?>

