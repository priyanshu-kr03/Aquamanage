<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign in Data</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Admin Dashboard Sign in data</a>
      </div>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>
    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Email Id</th>
      <th scope="col">First Name</th>
       <th scope="col">Last name</th>
       <th scope="col">Phone Number</th>
      <th scope="col">Password</th>
      <th scope="col">Re password</th>
       <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
       <th scope="col">Zip</th>
      <th scope="col">Farmer</th>
      <th scope="col">Pond</th>
       <th scope="col">Pond size</th>
    </tr>
  </thead>
  <?php
     include_once('connection.php');
      $signd ="SELECT * FROM signup";
      $exe =mysqli_query($con,$signd);
      while($fetch=mysqli_fetch_array($exe)){
  ?>
   <tbody>
    <tr>
      <th><?php echo $fetch['add_id']  ?></th>
      <td><?php echo $fetch['email_sign']  ?></td>
      <td><?php echo $fetch['f_name']  ?></td>
      <th><?php echo $fetch['l_name']  ?></th>
      <td><?php echo $fetch['phone_no']  ?></td>
      <td><?php echo $fetch['password1']  ?></td>
      <td><?php echo $fetch['repassword1']  ?></td>
      <th><?php echo $fetch['address']  ?></th>
      <td><?php echo $fetch['city']  ?></td>
      <td><?php echo $fetch['state']  ?></td>
      <th><?php echo $fetch['zip']  ?></th>
      <td><?php echo $fetch['farmer']  ?></td>
      <th><?php echo $fetch['pond']  ?></th>
      <td><?php echo $fetch['pondsize']  ?></td>
    </tr>  
  </tbody>  
  <?php }
?>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>