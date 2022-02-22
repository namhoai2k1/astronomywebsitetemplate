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
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 bg-info text-white">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Đỏi mật khẩu</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="username">Old Password</label>
                        <input type="text" name="oldPassword" id="oldPassword" class="form-control" placeholder="Old Password" required>
                    </div>
                    <div class="form-group">
                        <label for="username">New Password</label>
                        <input type="text" name="newUsername" id="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password Repeat</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password Repeat" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div>
                    <a href="./signin.php">sign in</a>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>