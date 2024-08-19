<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles1.css">
</head>
<body>

<div class="container">
    <h1 class="mt-5 mb-4">Product Catalog</h1>
    <div class="row">
        <?php
        require_once('php/db_connection.php');

        $sql = "SELECT * FROM Products ORDER BY ProductID ASC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $productID = $row['ProductID'];
                $productCode = $row['ProductCode'];
                $productName = $row['ProductName'];
                $imageURL = $row['ImageURL'];

                echo "
                <div class='col-md-4'>
                    <div class='card mb-4'>
                        <div class='card-header'>
                            <h5> # $productCode </h5>
                        </div>
                        <img src='$imageURL' class='card-img-top' alt='Product Image'>
                        <div class='card-footer'>
                            <div>
                                <h3>$productID</h3>
                            </div>
                            <div>
                                <h6><b>Product Name:</b> $productName</h6>
                                <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#productModal$productCode'>
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>";

                echo "
                <div class='modal fade bd-example-modal-lg' id='productModal$productCode' tabindex='-1' role='dialog' aria-labelledby='productModalLabel$productCode' aria-hidden='true'>
                    <div class='modal-dialog modal-lg' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='productModalLabel$productCode'>Product Details</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <div class='row custom col-md-12'>
                                    <div class='col-md-6'>
                                        <img src='$imageURL' class='img-fluid' alt='Product Image'>
                                    </div>
                                    <table class='table table-bordered col-md-6'>
                                        <tbody>
                                            <tr>
                                                <th scope='row'>Product Code</th>
                                                <td>$productCode</td>
                                            </tr>
                                            <tr>
                                                <th scope='row'>Product Name</th>
                                                <td>$productName</td>
                                            </tr>
                                            <tr>
                                                <th scope='row'>Size & Specification</th>
                                                <td>$row[SizeAndSpecification]</td>
                                            </tr>
                                            <tr>
                                                <th scope='row'>Thickness</th>
                                                <td>$row[Thickness]</td>
                                            </tr>
                                            <tr>
                                                <th scope='row'>Types of Finish</th>
                                                <td>$row[TypesOfFinish]</td>
                                            </tr>
                                            <tr>
                                                <th scope='row'>Colour</th>
                                                <td>$row[Colour]</td>
                                            </tr>
                                            <tr>
                                                <th scope='row'>Uses</th>
                                                <td>$row[Uses]</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div>
                </div>";
            }
        } else {
            echo "No products found.";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
