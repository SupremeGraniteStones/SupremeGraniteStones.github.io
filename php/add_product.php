<?php
// Include the database connection file
require_once('db_connection.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $productCode = mysqli_real_escape_string($conn, $_POST['productCode']);
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $sizeSpec = mysqli_real_escape_string($conn, $_POST['sizeSpec']);
    $thickness = mysqli_real_escape_string($conn, $_POST['thickness']);
    $typesOfFinish = mysqli_real_escape_string($conn, $_POST['typesOfFinish']);
    $colour = mysqli_real_escape_string($conn, $_POST['colour']);
    $usage = implode(',', $_POST['usage']); // Convert array to comma-separated string

    // Image upload
    $targetDir = "../uploads/";
    $targetFile = $targetDir . $productCode . '.' . pathinfo($_FILES["productImage"]["name"], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile);
    $imageUrl = $targetFile;


    // Insert query
    $sql = "INSERT INTO products (ProductCode, ProductName, SizeAndSpecification, Thickness, TypesOfFinish, Colour, Uses, ImageURL)
            VALUES ('$productCode', '$productName', '$sizeSpec', '$thickness', '$typesOfFinish', '$colour', '$usage', '$imageUrl')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to add_product_form.html on success - C:\Users\vivek\Desktop\sgs\SupremeGraniteStones.github.io\addproducts.html
        header("Location: ../addproducts.html");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!-- 
    CREATE TABLE Products (
    ProductID INT AUTO_INCREMENT NOT NULL,
    ProductCode VARCHAR(255) NOT NULL,
    ProductName VARCHAR(255) NOT NULL,
    SizeAndSpecification VARCHAR(255) DEFAULT '3000 * 900 mm',
    Thickness VARCHAR(255) DEFAULT '20 mm',
    TypesOfFinish VARCHAR(255) NOT NULL,
    Colour VARCHAR(255) NOT NULL,
    Uses TEXT NOT NULL,
    ImageURL VARCHAR(255),
    PRIMARY KEY (ProductCode),
    UNIQUE (ProductID)
);

 -->
