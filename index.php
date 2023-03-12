<?php
    include 'partials/_dbconnect.php';
    $showAlert = false;
    $showError = false;
    $login = false;
    $showErrors = false;
    if(isset($_POST['btn1'])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $useremail = $_POST["useremail"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $businame = $_POST["businessname"];
            $exist = false;
            
            if(($password == $cpassword) && $exist==false){
                $sql = "INSERT INTO `users` (`uemail`, `upassword`, `uname`, `ubusiness`) VALUES ('$useremail', '$password', '$username', '$businame');";
                $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                }
            }
            else{
                $showError = "Password does not match.";
            }
        }
    }
    if(isset($_POST['btn2'])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $lusername = $_POST["lusername"];
            $lpassword = $_POST["lpassword"];
            $sql = "Select * from users where uemail = '$lusername' AND upassword = '$lpassword';";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
            }
            else{
                $showErrors = "Invalid Credentials";
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

    <?php require 'partials/_navbar.php'?>
    <?php
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account has been created on our website.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($login){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You are logged in.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showErrors){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$showErrors.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    ?>
    
        
    
    <!-- Sign Up Modal -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signupModalLabel">Sign Up to StockPile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/hackthon/index.php" method="POST">
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Enter your Email Address</label>
                            <input type="email" class="form-control" id="useremail" name="useremail"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text" placeholder="abc@example.com">We'll never share your
                                email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Enter Your Name and Surname</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>

                        <div class="mb-3">
                            <label for="businessname" class="form-label">Enter your Business</label>
                            <input type="text" class="form-control" id="businessname" name="businessname">
                        </div>
                        <button type="submit" class="btn btn-success" name="btn1">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Login Modal -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Login In to StockPile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/hackthon/index.php" method="post">
                        <div class="mb-3">
                            <label for="lusername" class="form-label">Enter your Email Address</label>
                            <input type="email" class="form-control" id="lusername" name="lusername"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text" placeholder="abc@example.com">We'll never share your
                                email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="lpassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="lpassword" name="lpassword">
                        </div>
                        <button type="submit" class="btn btn-danger" name="btn2">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="orders1.PNG" class="d-block w-100" alt="marketing">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 80px; display: inline-block;">Welcome to inventory Management System</h5>
                    <p>Sign Up and Log In starting your inventory Management</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="marketing1.PNG" class="d-block w-100" alt="sales">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 80px; display: inline-block;">Sales Representation</h5>
                    <p>You can now see how your sales are going and manage your orders</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sales.PNG" class="d-block w-100" alt="orders">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 80px; display: inline-block;">Managing Order</h5>
                    <p>All your orders can be dispalyed and managed properly</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card text-center my-3">
        <!-- <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div> -->
        <div class="card-body">
            <h5 class="card-title">Have a Great Impact on your retail business!</h5>
            <p class="card-text">Make Maximum profit based by sales</p>
            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
            <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        </div>
    </div>

    <footer class="mt-auto text-black-50" style="width: 340px; margin: auto; font-weight: bolder;">
        <p class="text-black">Get analysis for sales and inventory <a href="index.html" class="text-black" style="text-decoration:none">StockPile</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>