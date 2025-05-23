<?php
function displayProducts($products) {
    echo "<ul>";
    foreach ($products as $product) {
        echo "<li><strong>{$product['name']}</strong> - \${$product['price']}</li>";
    }
    echo "</ul>";
}
?>
