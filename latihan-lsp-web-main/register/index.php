<?php 

require 'process.php';

if(isset($_POST["register"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('registration is successful, please login!')
            window.location = '../login/index.php'
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('sorry, registration failed')
            window.location = 'index.php'
        </script>
        ";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <center><h1><b>Shoppupurinta</b></h1></center>
        <h3>Create your account</h3>
        <form action="" method="POST">
            <label>Username : </label>
        <input type="text" name="username" class="form-control" id=""> <br /><br />

        <label>Full name : </label>
        <input type="text" name="name" class="form-control" id=""> <br /><br />

        <label>Password : </label>
        <input type="password" name="password" class="form-control" id=""> <br /><br />

        <label>Login as : </label>
        <input type="text" name="roles" class="form-control" id="" value="Customer"><br /> <br />
        
        <button type="submit" name="register">Register</button>
        <div class="login">
            <small>Already have an account? <br />
            <a href="../login/index.php">Login / </a></small>
            <a href="../index.php" class="nani"> Back</a>
        </div>
    </form>
</div>
</body>
</html>