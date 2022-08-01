<?php 
include "dataconn.php";
include('./header/head_nav.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create Registration form with MySQL and PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class='container'>
      <div class='row'>

        <div class='col-md-6' >

          <form method='post' action=''>

            <h3>ADDING ARTISTS</h3>
            <?php 
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>

            <div class="form-group">
              <label for="fname">Artist Name:</label>
              <input type="text" class="form-control" name="aname" id="fname" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="lname">Date of birth:</label>
              <input type="date" class="form-control" name="dob" id="lname" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="fname">Bio:</label>
              <input type="text" class="form-control" name="bio" id="fname" required="required" maxlength="80">
            </div>


            <button type="submit" href="" name="btnsignup" class="btn btn-default">Add</button>
            <a class="btn btn-outline-success" href="reg_song.php">Back</a>
          </form>
        </div>

     </div>
    </div>
  </body>
</html>