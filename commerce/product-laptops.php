<?php
$conn = mysqli_connect('localhost', 'root', '', 'product');
// mysqli_select_db($conn, 'product');
$sql = "SELECT * FROM products WHERE feature=2";
$feature = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- jquery has to come before bootstrap coz it needs jquery to work -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Buy</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="#" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tech.Buy Com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-2">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdown">
                        <li><a class="dropdown-item" href="product-laptops.php">Laptops</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="product-phones.php">Phones</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

        <div class="col-md-8">
            <div class="">
                <h2 class="text-center">Top Products</h2>
                <?php
                while ($product = mysqli_fetch_assoc($feature)) :
                ?>
                    <div class="col-md-5">
                        <h4> <?php echo $product['title']; ?> </h4>
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                        <p class="lprice">$ <?php echo $product['price']; ?></p>
                        <a href="details.php">
                            <button type="button" class="btn btn-success" data-toggle="model" data-target="#details-1">More</button>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>