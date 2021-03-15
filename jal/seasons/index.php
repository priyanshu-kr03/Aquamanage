<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addSeasoncss.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>add Season</title>
</head>
<body>
   
   <?php
     include_once('../connection.php');
        error_reporting(0);
       $fish_1=$_POST['fish'];
       $fish_2=$_POST['fish_stage'];
       $fish_3=$_POST['fish_date'];
       $fish_4=$_POST['fish_stock'];
       $fish_5=$_POST['fish_production'];
       $fish_6=$_POST['fish_stoke_no'];
       $fish_7=$_POST['fish_period'];

        if ($fish_1!="" && $fish_2!="" && $fish_3!=""&& $fish_4!=""&& $fish_5!="" && $fish_6!="" && $fish_7!="")
     {
      $fish_d="INSERT INTO fish_data SET fish_type='$fish_1' , fish_stag='$fish_2' , fish_date='$fish_3' , fish_stoke='$fish_4' , fish_production='$fish_5' , fish_stokeno='$fish_6' , fish_peried='$fish_7'";
      mysqli_query($con,$fish_d);
     }
   ?>



<div class="p-0"> <ul id="list" style="list-style: none;" >

</ul> 
</div>

    <div id="addBtn">
    <button id="myBtn" class="btn btn-primary">Add Season</button>
    </div>

    
   
    <div id="myModal" class="modal">
    
       
        <div class="modal-content">
            <span class="close">&times;</span>
           


            <form id="default" method="POST">
                <div class="form-row ">
                    <div class="form-group col-sm-4">
                        <label for="inputEmail4">Fish type</label><br>
                        <select class="form-control" id="sel1" name="fish">
                            <option>Labeo Rohita</option>
                            <option>Indian Carp</option>
                            <option>Hilsa</option>
                            <option>Ailia Coila</option>
                        </select>
                    </div>
                   
                    <div class="form-group col-sm-4">
                        <label for="inputPassword4">Fish Growth Stage</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="type here" name="fish_stage" required>
                    </div>
                  
                    <div class="form-group col-sm-4">
                        <label for="inputPassword4">Stocking Date</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Type here" required  name="fish_date">
                    </div>
               
                    <div class="form-group col-sm-4">
                        <label for="inputPassword4">Stocking No</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Type here" required name="fish_stock" >
                    </div>
                  
                    <div class="form-group col-sm-4">
                        <label for="inputPassword4">Production Period</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Type here" required name="fish_production">
                    </div>
                 
                    <div class="form-group col-sm-4">
                        <label for="inputPassword4">Stocking No</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Type here" required name="fish_stoke_no">
                    </div>
               
                    <div class="form-group col-sm-4">
                        <label for="inputPassword4">Production Period</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Type here" required name="fish_period">
                    </div>
                </div>   
                <button type="button" type="submit" class="btn btn-danger" name="button" onclick="Submit()">Submit</button>
            </form>
            
        </div>
    
    </div>

    <script src="addSeason.js"> </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>