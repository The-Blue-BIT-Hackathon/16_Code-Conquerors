<?php
    include 'partials/_dbconnect.php';
    $sql = "Select * from sales;";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>StockPile - Get analysis for sales and inventory</title>
</head>

<body>
    <?php require 'partials/_header.php'?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Product Details from the Database</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>ProductId</td>
                                <td>Product Name</td>
                                <td>Product Price</td>
                                <td>New Orders</td>
                            </tr>
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result)){

                                ?>
                                <td><?php echo $row['productId']; ?></td>
                                <td><?php echo $row['productname']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['orders']; ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="card mt-5">
        <div class="container my-4" style="width: 953px;">
            <button type="button" class="btn btn-lg" style="font-size:40px;">
                <a href="/hackthon/orderadd.php" class ="mybuttons" style="text-decoration: none; color:white; background-color: #0d6efd; padding: 10px; border-radius: 10px;">Place Order</a>
            </button>
        </div>
    </div>
    <footer class="mt-auto text-black-50" style="width: 340px; margin: auto; font-weight: bolder;">
        <p class="text-black my-5">Get analysis for sales and inventory <a href="index.html" class="text-black" style="text-decoration:none">StockPile</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>