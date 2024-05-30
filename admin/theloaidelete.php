<?php
    include "class/theloai_class.php";
    $theloai = new theloai;
    if(!isset($_GET['theloai_id']) || $_GET['theloai_id']==NULL){
        echo "<script>window.location = 'the_loailist.php'</script>";
    }
    else{
        $theloai_id = $_GET['theloai_id'];
    }
    $delete_theloai = $theloai -> delete_theloai($theloai_id);

?>