<?php
    include "header.php";
    include "slider.php";
    include "class/sach_class.php";
?>

<?php
    $sach = new sach;
    $show_allsach = $sach ->show_fullsach();
?>

<div class="admin-content-right">
            <div class="admin-content-right-category-list">
                <h1>Danh sách</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>id</th>
                        <th>Tên sách</th>
                        <th>Nhà xuất bản</th>
                        <th>Thể loại</th>
                        <th>Ngày xuất bản</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Hình</th>
                    </tr>

                    <?php
                        if($show_allsach){$i = 0;
                            while($result = $show_allsach->fetch_assoc()){ $i++;

                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['sach_id'] ?></td>
                        <td><?php echo $result['sach_name'] ?></td>
                        <td><?php echo $result['book_name'] ?></td>
                        <td><?php echo $result['theloai_name'] ?></td>
                        <td><?php echo $result['sach_ngayxuatban'] ?></td>
                        <td><?php echo $result['sach_gia'] ?></td>
                        <td><?php echo $result['sach_mota'] ?></td>
                        <td><?php echo $result['sach_hinh'] ?></td>
                        <td><a href="sachedit.php?sach_id=<?php echo $result['sach_id'] ?>">Sửa / </a><a href="sachelete.php?sach_id=<?php echo $result['sach_id'] ?>"> Xóa</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>

                </table>
            </div>
</div>
    </section>

</body>
</html>