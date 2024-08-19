<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Catalogue</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .product img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Manage Catalogue</h2>
        <div class="row">
            <?php
            // Include database connection
            include 'db_connection.php';

            // Fetch products from the database
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            // Check if there are any products
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-4">
                        <div class="product">
                            <h4><?php echo $row["name"]; ?></h4>
                            <p>Item Code: <?php echo $row["item_code"]; ?></p>
                            <p>Color: <?php echo $row["color"]; ?></p>
                            <p>Finish: <?php echo $row["finish"]; ?></p>
                            <p>Size 1: <?php echo $row["size1"]; ?></p>
                            <p>Size 2: <?php echo $row["size2"]; ?></p>
                            <p>Size 3: <?php echo $row["size3"]; ?></p>
                            <p>Thickness: <?php echo $row["thickness"]; ?></p>
                            <p>Usage: <?php echo $row["usages"];
                                if (!empty($row["other_usage"])) {
                                    echo " (Other: " . $row["other_usage"] . ")";
                                }
                            ?></p>
                            <img src="<?php echo $row["image"]; ?>" alt="Product Image" class="img-fluid">
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No products found";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
