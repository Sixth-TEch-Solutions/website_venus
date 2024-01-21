<?php
require_once 'connection.php';

// Modify your SQL query to limit the number of rows to 6
$sql = "SELECT * FROM product LIMIT 6";
$all_product = $conn->query($sql);
?>

<?php
include('template/header.php');
?>

<link rel="stylesheet" href="./assets/css/index.css">

<section class="content">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/image/imagecontent.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-light">Responsive left-aligned hero with image</h1>
                <p class="lead text-light">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="propertis-content">
    <path fill="#F49999" fill-opacity="1" d="M0,224L48,218.7C96,213,192,203,288,181.3C384,160,480,128,576,96C672,64,768,32,864,58.7C960,85,1056,171,1152,192C1248,213,1344,171,1392,149.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>

</svg>
<section id="Produk">
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
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
include('template/footer.php');
?>