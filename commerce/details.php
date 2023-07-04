<?php
$conn = mysqli_connect('localhost', 'root', '', 'product');
// mysqli_select_db($conn, 'product');
$sql = "SELECT * FROM products WHERE feature=1";
$feature = mysqli_query($conn, $sql);
?>

<div class="col-md-8">
            <div class="">
                <h2 class="text-center">Top Products</h2>
                <?php
                while ($product = mysqli_fetch_assoc($feature)) :
                ?>
                    <div class="col-md-5">
                        <h4> <?php echo $product['title']; ?> </h4>
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                        <p class="lprice"><b>$ <?php echo $product['price']; ?></b></p>
                        <p class="desc"> <?php echo $product['description']; ?></p>
                        <p class="bname"> <?php echo $product['brandname']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>