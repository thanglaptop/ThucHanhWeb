<?php
    include "header.php";
    include "slider.php";
    include "class/theloai_class.php";
?>

<?php
    $theloai = new theloai;
    $show_theloai= $theloai ->show_theloai();
?>

<div class="admin-content-right">
            <div class="admin-content-right-category-list">
                <h1>Danh sách</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên Danh mục</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>

                    <?php
                        if($show_theloai){$i = 0;
                            while($result = $show_theloai->fetch_assoc()){ $i++;

                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['theloai_id'] ?></td>
                        <td><?php echo $result['book_name'] ?></td>
                        <td><?php echo $result['theloai_name'] ?></td>
                        <td><a href="theloaiedit.php?theloai_id=<?php echo $result['theloai_id'] ?>">Sửa / </a><a href="theloaidelete.php?theloai_id=<?php echo $result['theloai_id'] ?>"> Xóa</a></td>
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