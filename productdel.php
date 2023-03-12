<?php
    include 'partials/_dbconnect.php';
    $pronum = $_POST['delnum'];
    $sql = "DELETE FROM product WHERE `productname` = '$pronum';";
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
    <div class="container my-5">
        <form action="/hackthon/productdel.php" method="post">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Enter product name</label>
              <input type="text" class="form-control" id="delnum" name="delnum">
            </div>
            <button type="submit" class="btn btn-primary">Delete Product</button>
          </form>
    </div>

    <footer class="mt-auto text-black-50" style="width: 550px; margin: auto; font-weight: bolder;">
        <p class="text-black">Enter the Query and we will get in touch in less than 2 hours <a href="index.html" class="text-black" style="text-decoration:none">StockPile</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</html>