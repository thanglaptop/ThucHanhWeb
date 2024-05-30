<?php
    include "class/sach_class.php";
    $sach = new sach;
    if(!isset($_GET['sach_id']) || $_GET['sach_id']==NULL){
        echo "<script>window.location = 'sachlist.php'</script>";
    }
    else{
        $sach_id = $_GET['sach_id'];
    }
    $delete_sach = $sach -> delete_sach($sach_id);

?>