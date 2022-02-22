<?php 
    session_start();
    include './control.php'; 
    $getData = new Data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lin bootrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 bg-info text-white" id="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Login</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div>
                    <a href="./signin.php" class="btn btn-danger">sign in</a>
                </form>
                <?php 
                    if (isset($_POST['submit'])) {
                        if(empty($_POST['username']) || empty($_POST['password']))
                        {
                            echo "<p class='text-danger'>Please fill all the fields</p>";
                        }
                        else 
                        {
                            $login = $getData->login($_POST['username'], $_POST['password']);
                            if ($login == 1) {
                                $_SESSION['username'] = $_POST['username'];
                                header('location: admin.php');
                                // echo '<p class="text-white">Login success</p>';
                            } else {
                                echo '<p class="text-danger">Login fail</p>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>