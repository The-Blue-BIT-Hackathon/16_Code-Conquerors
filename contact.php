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
    <?php require 'partials/_navbar.php'?>
    <div class="container">
        <h2 class="my-5" style="font-size:40px">Contact Us</h2>
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input placeholder="abc@example.com" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <label for="problem selection">Select the Problem</label>
            <div class="mb-3" id="drop-list">
                <select name="" id="">
                    <option value="web development">stock items</option>
                    <option value="app development">sales</option>
                    <option value="software development">orders</option>
                    <option value="Machine Learning">custom</option>
                </select>
            </div>

            <label for="problem selection">Describe the Problem</label>
            <div class="mb-3" id="text-area">
                <textarea placeholder="Describe the problem in detail..." name="" id="" cols="130" rows="7"></textarea>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
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