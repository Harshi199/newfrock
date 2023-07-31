<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "login";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title> Frock design </title>
  </head>
  <style>
    

    body{
    background-color: blueviolet;
}
form{
    background-color: rgb(255, 255, 255);
    width:50%;
    border-radius: 4px;
    margin:120px auto;
    padding:50px;
    box-shadow: 10px 10px 5px rgb(82, 11, 77);
}

  </style>
  <body>

  

    <form name="form"  action="login.php" method="POST">
        <div class="frock">
        <div class="row">
  <div class="col-md-6">
  <img src="data:image/jpeg;base64,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" alt="..." class="img-thumbnail">
    </div>

    <div class="col-md-6">
    <p class="h2" >Login</p>

    <label class="from-label">User Name </label>
    <input type="text" class="form-control" name="username" width="20px">

    <label class="from-label">Password </label>
    <input type="text" class="form-control" name="password" width="20px">
<br>
    <input type="submit" class="from-label" name="submit" value="submit">
    </div>
    </div>




        </div>

    </form>

    <?php 
     if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from loginto where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            echo'<script> alert("hello")</script>';
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }    
     }
     ?>

    
    






    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   