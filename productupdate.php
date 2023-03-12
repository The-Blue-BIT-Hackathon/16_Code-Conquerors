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
    <div class="contianer1" style="margin-left: 100px; margin-top: 50px; margin-right: 100px;">
        <ul class="list-group">
            <li class="list-group-item" style="cursor:pointer; line-height: 60px; border: 2px grey solid;">An item</li>
            <li class="list-group-item" style="cursor:pointer; line-height: 60px; border: 2px grey solid;">A second item
            </li>
            <li class="list-group-item" style="cursor:pointer; line-height: 60px; border: 2px grey solid;">A third item
            </li>
            <li class="list-group-item" style="cursor:pointer; line-height: 60px; border: 2px grey solid;">A fourth item
            </li>
            <li class="list-group-item" style="cursor:pointer; line-height: 60px; border: 2px grey solid;">And a fifth
                one</li>
        </ul>
    </div>

    <!-- <div class="container my-5">
        <form>
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Enter product name</label>
              <input type="text" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Enter product price</label>
              <input type="text" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Enter product quantity</label>
              <input type="text" class="form-control" id="exampleInputName">
            </div>
            <label for="problem selection">Describe the Product</label>
            <div class="mb-3" id="text-area">
                <textarea placeholder="Describe the problem in detail..." name="" id="" cols="100" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
          </form>
    </div> -->


    <footer class="mt-auto text-black-50" style="width: 340px; margin: auto; font-weight: bolder;">
        <p class="text-black">Get analysis for sales and inventory <a href="index.html" class="text-black"
                style="text-decoration:none">StockPile</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            function myFunction() {
                document.getElementsByClassName("list-group-item").innerHTML = "Second item";
            }
            </script>
</body>
</html>