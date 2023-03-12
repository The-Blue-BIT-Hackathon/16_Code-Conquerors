<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header('Location: index.php');
        exit;
    }
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
    <style>
        /* .mybuttons:hover{
            background-color: lightblue;
        } */
        .d-drid.container2.btn.mybtn:hover{
            color: white;
        }
    </style>
</head>

<body>
    <?php require 'partials/_header.php'?>

    <div class="container2d-grid gap-2 col-8 my-4 mx-auto">
        <h3 class="display-4 my-3">Total Number of Products we have: 1000</h3>
        <h3 class="display-4 my-3">Number of Products we sold: 1000</h3>
        <h3 class="display-4 my-3">Total Number of Products in stock: 0</h3>
        <h3 class="display-4 my-3">Total Sales: Rs.100000</h3>
        <div class="dropdown" style="display: inline-block; padding-bottom: 10px;">
            <button class="btn btn-secondary dropdown-toggle" style="font-size:20px;" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Select Dates
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">Last Month</a></li>
                <li><a class="dropdown-item" href="#">7 Days</a></li>
                <li><a class="dropdown-item" href="#">Today</a></li>
            </ul>
        </div>
    </div>

    <footer class="mt-auto text-black-50" style="width: 340px; margin: auto; font-weight: bolder;">
        <p class="text-black">Get analysis for sales and inventory <a href="index.html" class="text-black"
                style="text-decoration:none">StockPile</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>