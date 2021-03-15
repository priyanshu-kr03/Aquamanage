<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 <section class="container-fluid  ">       
      <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
         <form class="form-container was-validated" method="POST" >
  <div class="form-group">
    <h2>Login form</h2>
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="tel" class="form-control " name="phone_address" placeholder="9876543210" required="" maxlength="10">
    <div class="valid-feedback">Your Phone Number is Valid</div>
    <div class="invalid-feedback">Please Enter a Valid Phone Number </div>
    <small class="form-text text-muted">We'll never share your Phone Number with anyone else.</small>
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
  <button type="submit" class="btn btn-primary btn-block text-white" name="login">Submit</button>
   <button class="btn btn-primary  btn-block bg-danger"><a href="index.php">Sign Up</a></button>
</form>        
            </section>
      </section>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>