<?php
 include "header.php";
 include "slider.php";
 include "class/cartegory_class.php"
?>

<?php
    $cartegory = new cartegory;
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cartegory_name = $_POST['cartegory_name'];
        $insert_cartegory = $cartegory->insert_cartegory( $cartegory_name);
    }
?>



        <div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Thêm Danh Mục</h1>
                <form action="" method="POST">
                    <input required type="text" placeholder="Nhập tên danh mục" name="cartegory_name" id="">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>