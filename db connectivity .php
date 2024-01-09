<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .book {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            display: inline-block;
            text-align: center;
        }
        #cart {
            border: 1px solid #000;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Online Bookstore</h1>

    <div id="books-container">
        <?php
        // Include your database connection file
        include('db_connect.php');

        // Fetch books from the database
        $query = "SELECT * FROM books";
        $result = mysqli_query($connection, $query);

        // Display books
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="book">';
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p>Price: $' . $row['price'] . '</p>';
            echo '<button onclick="addToCart(' . $row['id'] . ')">Add to Cart</button>';
            echo '</div>';
        }

        // Close database connection
        mysqli_close($connection);
        ?>
    </div>

    <div id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
            <!-- Cart items will be dynamically added here using JavaScript -->
        </ul>
    </div>

    <script>
        // Function to add a book to the shopping cart
        function addToCart(bookId) {
            // Your JavaScript logic for adding to the cart
        }
    </script>
</body>
</html>
