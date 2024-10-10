<?php
$query = 'SELECT * FROM heckin_snackers'; // Adjust the table name if necessary
$products = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

// Loop through the products and display them
foreach ($products as $product) {
    print "<div class='product-card'>";
    print "<img src='./assets/images/product-images/{$product['id']}.jpg' alt='{$product['product_name']}' class='product-card-images'>";
    print "<h2>" . $product['product_name'] . "</h2>";
    print "<p>" . $product['product_price'] . "</p>";
    print "<button>Add to Cart</button>";
    print "</div>";
}