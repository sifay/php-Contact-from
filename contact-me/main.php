<?php

  if(isset($_POST['name'])) 

  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con) {
      die("failed");
  }
  //echo "success";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  $sql = "INSERT INTO `contact_me`.`contact_list` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', current_timestamp());";



  //echo $sql;
  /*
  if($con->query($sql) == true) {
    echo "successfullly complied";
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
   */

?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP CONTACT FORM</title>
    <style>
      h3{
    color: #212529;
    opacity: 0.5;
}
    </style>
  </head>
  <body>
   
    <div class="container my-4 p-4 shadow">
        <h2>Contact ME</h2>
        <h3> <?php
        if($con->query($sql) == true) {
          echo "successfullly sent";
        }
        else{
          echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
        ?> </h3>
        <form action="main.php" method="POST">
        <input class="form-control mb-2" type="text" name="name" placeholder="Enter your name">
        <input class="form-control mb-2" type="text" name="email" placeholder="Enter your email">
        <input class="form-control mb-2 message" type="text" name="message" placeholder="Type your message">
         <button class="btn btn-dark">Send</button>
        </form>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>