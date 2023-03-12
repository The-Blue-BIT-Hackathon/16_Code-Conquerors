<?php
    include 'partials/_dbconnect.php';
    $showAlert = false;
    $showError = false;
    if(isset($_POST['btn1'])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $proname = $_POST["proname"];
            $proprice = $_POST["proprice"];
            $proquantity = $_POST["proquantity"];
            $prodes = $_POST["prodes"];
            $exist = false;
            
            if($exist==false){
                $sql = "INSERT INTO `product`(`productname`, `price`, `quantity`, `description`) VALUES ('$proname','$proprice','$proquantity','$prodes')";
                $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                }
            }
            else{
                $showError = "Syntax error occurred.";
            }
        }
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
</head>

<body>    
    <?php require 'partials/_header.php'?>
    <?php 
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your product inserted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    ?>
    <div class="container my-5">
        <form action="/hackthon/productadd.php" method="post">
            <div class="mb-3">
              <label for="proname" class="form-label">Enter product name</label>
              <input type="text" class="form-control" id="proname" name="proname">
            </div>
            <div class="mb-3">
              <label for="proprice" class="form-label">Enter product price</label>
              <input type="text" class="form-control" id="proprice" name="proprice">
            </div>
            <div class="mb-3">
              <label for="proquantity" class="form-label">Enter product quantity</label>
              <input type="text" class="form-control" id="proquantity" name="proquantity">
            </div>
            <label for="problem selection">Describe the Product</label>
            <div class="mb-3" id="text-area">
                <textarea placeholder="Describe the problem in detail..." name="prodes" id="prodes" cols="100" rows="3"></textarea>
            </div>
            <button type="submit" id="btn1" name="btn1" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
    
    <footer class="mt-auto text-black-50" style="width: 340px; margin: auto; font-weight: bolder;">
        <p class="text-black">Get analysis for sales and inventory <a href="index.html" class="text-black" style="text-decoration:none">StockPile</a></p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>