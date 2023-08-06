<?php
// Assume you have a function to connect to the database and query the products
// Replace 'your_database_credentials' with your actual database connection details.

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $image = $row['image'];

        // Display each product
        echo '<div class="product">';
        echo '<img src="' . $image . '" alt="' . $name . '">';
        echo '<h3>' . $name . '</h3>';
        echo '<p>' . $description . '</p>';
        echo '<p>$' . $price . '</p>';
        echo '<button onclick="addToCart(' . $id . ')">Add to Cart</button>';
        echo '</div>';
    }
} else {
    echo '<p>No products found.</p>';
}

$conn->close();
?>
