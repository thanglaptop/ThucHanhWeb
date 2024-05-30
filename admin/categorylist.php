<?php
    include "header.php";
    include "slider.php";
    include "class/category_class.php";
?>

<?php
    $category = new category;
    $show_book = $category ->show_book();
?>

<div class="admin-content-right">
            <div class="admin-content-right-category-list">
                <h1>Danh sách</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th></th>
                    </tr>

                    <?php
                        if($show_book){$i = 0;
                            while($result = $show_book->fetch_assoc()){ $i++;

                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['book_id'] ?></td>
                        <td><?php echo $result['book_name'] ?></td>
                        <td><a href="categoryedit.php?book_id=<?php echo $result['book_id'] ?>">Sửa / </a><a href="categorydelete.php?book_id=<?php echo $result['book_id'] ?>"> Xóa</a></td>
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