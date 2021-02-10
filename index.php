<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Sign up</title>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
          </script> 
</head>
 <?php
 error_reporting(0);
    include_once('connection.php');
       $email=$_POST['email_address'];
       $firstname=$_POST['fname'];
       $lastname=$_POST['lname'];
       $pass1=$_POST['password1'];
       $pass2=$_POST['password2'];
       $add=$_POST['inputadd'];
       $city=$_POST['inputcity'];
       $state=$_POST['inputstate'];
       $zip=$_POST['inputzip'];
       $farmer_1=$_POST['farmer'];
       $pond_1=$_POST['pond'];
       $pond_size=$_POST['size'];


     if ($email!="" && $firstname!="" && $lastname!=""&& $pass1!="" && $pass2!="" && $add!="" && $city!="" && $state!="" && $zip!="" && $farmer_1!="" && $pond_1!="" && $pond_size!="")
     {
      $user="INSERT INTO signup SET email_sign='$email' , f_name='$firstname' , l_name='$lastname' , password1='$pass1' , repassword1='$pass2' , address='$add' , city='$city' , state='$state' , zip='$zip' , farmer='$farmer_1' , pond='$pond_1' , pondsize='$pond_size' ";
      mysqli_query($con,$user);
     }
  ?>


<body class="bg-light">

    <section class="container-xxl ">       
      <section class="row justify-content-center">
            <section class="col-12 col-sm-8 col-md-4">
    <form class="form-container was-validated" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h2>Sign up form</h2>
  
  
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email_address" placeholder="Email" required="">
       <div class="valid-feedback">Your Email is Valid</div>
       <div class="invalid-feedback">Please Enter a Valid Email </div>      
    </div>
    <div class="form-row">
    <div class="col">
      <label >First Name</label>
      <input type="text" class="form-control" placeholder="First name" name="fname" required="">
      <div class="valid-feedback">Valid</div>
      <div class="invalid-feedback">Invalid </div>
    </div>
    <div class="col">
      <label>Last Name</label>
      <input type="text" class="form-control" placeholder="Last name" name="lname" required="">
      <div class="valid-feedback">Valid</div>
      <div class="invalid-feedback">Invalid</div>
    </div>
  </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password1"  placeholder="Password" required="">
      <div class="valid-feedback">Your Password is Valid</div>
      <div class="invalid-feedback">Please Enter a Valid Password </div>
      <label>Re EnterPassword</label>
      <input type="password" class="form-control" name="password2" placeholder="Password" required="">
      <div class="valid-feedback">Your Password is Valid</div>
      <div class="invalid-feedback">Please Enter a Valid Passowrd </div>
    </div>

  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="inputadd" placeholder="1234 Main St" required="">
    <div class="valid-feedback">Your Address is Valid</div>
    <div class="invalid-feedback">Please Enter Your Address </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="inputcity" required="">
      <div class="valid-feedback">Your City is Valid</div>
      <div class="invalid-feedback">Please Enter a Valid City </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">State</label>
      <input type="text" class="form-control" name="inputstate" required="">
      <div class="valid-feedback">Your State is Valid</div>
      <div class="invalid-feedback">Please Enter a Valid State </div>
    </div>
    <!-- <div class="form-group col-md-4 ">
      <label for="inputState">State</label>
      <select name="inputstate" class="form-control "  required="">
        <div class="valid-feedback">Your State is Valid</div>
        <div class="invalid-feedback ">Please Enter a Valid State </div>
        <option selected >Choose...</option>
        <option >Delhi</option>
        <option>UP</option>
        <option>MP</option>
        <option>Rajasthan</option>
      </select>
    </div> -->
    <div class="form-group col-md-4">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="inputzip" required="">
      <div class="valid-feedback">Your zip is Valid</div>
    <div class="invalid-feedback">Please Enter a Valid zip </div>
    </div>
  </div>
    
    <div>
      <p>Farmer</p>
      <input type="radio" name="farmer" onclick="undisableTxt()" required="">Yes</input>
      <input type="radio" name="farmer" onclick="disableTxt()" required="">No</input>
       <div class="valid-feedback"> Valid</div>
       <div class="invalid-feedback">Invalid</div>
      <p>Pond</p>
      <input type="radio"  name="pond" class="pond" onclick="enab()" required="">Yes</input>
      <input type="radio"  name="pond" class="pond" onclick="dis()" required="">No</input>
      <div class="valid-feedback"> Valid</div>
       <div class="invalid-feedback">Invalid</div>
      <br>
      <label>Pond size</label>
      <input type="number"class="form-control" name="size" class="pond" placeholder="Pond Size" required="">
      <div class="valid-feedback">Your Pond size is Valid</div>
    <div class="invalid-feedback">Please Enter a Valid Pond size </div> 
      
      <br>
    <button onclick="submit()" class="btn btn-primary  btn-block  ">Submit</button>
     <small id="login Help" class="form-text "><a href="signin.php"> login page</a></small>
  </div>
  </form>       
            </section>
      </section>
  </section>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>