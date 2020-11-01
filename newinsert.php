<?php
include 'conn.php';
if(isset($_POST['done']))
{  
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $prn=$_POST["prn"];
    $email=$_POST["email_id"];
    $sql= "INSERT INTO `registration` ( `fname`, `lname`, `prn`, `email_id`) VALUES ('$fname','$lname', '$prn', '$email')";
    $myresult=$conn->query($sql);
    // header('location:insert.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="main.js"></script>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light text-white">
        <a class="navbar-brand" href="newinsert.php">Registration  Site </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="newinsert.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div class="col-lg-6 m-auto bg-info">
        <br>
        <h1 class="text-black text-center">Registration</h1>
<form method="post" >
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" name="fname" require >
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" name="lname" require>
                    </div>
                    <div class="form-group">
                        <label for="desc">PRN</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="PRN" name="prn" rows="3" require>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="desc">Email ID</label>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email_id" rows="3" require>
                        </div>

                    </div>
                              <button type="submit"  class="btn btn-success" name="done">Submit</button>
                              <form action="display.php" method="POST">
 
                                  <input type="submit" class="btn btn-warning" value="Show" onclick="mydisplay() "/> 
                              </form>
                    <br>
                    <br>
        

</form>



    </div>