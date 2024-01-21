<?php
require_once 'connection.php';

// Modify your SQL query to limit the number of rows to 6
$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);
?>

<?php
include('template/header.php')
?>

<link rel="stylesheet" href="./assets/css/produk.css">

<section id="Produk-produk">
    <div class="container py-5">
        <h1 class="text-center text-danger">Produk</h1>
        <div class="row row-cols-1 row-cols-md-3 g-3 py-5">
            <?php while ($row = mysqli_fetch_assoc($all_product)) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $row["product_image"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $row["product_name"]; ?></h5>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3><?php echo $row["price"]; ?></h3>
                            <button class="btn btn-danger"><a href="order.php">Buy Now</a></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
include('template/footer.php')
?>