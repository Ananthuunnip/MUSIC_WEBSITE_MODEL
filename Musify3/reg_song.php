<?php 
include "dataconn.php";
include('./header/head_nav.php');
include "dataconn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create Registration form with MySQL and PHP</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class='container'>
      <div class='row'>
        <div class='col-md-6' >
        <form action="addsong.php" method="post" enctype="multipart/form-data">

            <h3>ADDING A NEW SONG</h3>          
            <div class="form-group">
              <label for="fname">Song Name:</label>
              <input type="text" class="form-control" name="c_name" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="lname">date Released:</label>
              <input type="date" class="form-control" name="c_dor" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="email">Artwork</label>
                <input class="form-control" type="file" name="c_image" required="required"/>
            </div>
            <div class="form-group" >
              <label for="password" >Artists:</label>
              <label for="cars">Choose Artists: </label>
                <select name="courseName">
                <option disabled selected>-- Select Category --</option>
                    <?php
                        include "dataconn.php";  // Using database connection file here
                        $c_artist = mysqli_query($conn, "SELECT aname From artists");  // Use select query here 

                        while($s_artist = mysqli_fetch_array($c_artist))
                        {
                            echo "<option value='". $s_artist['aname'] ."'>" .$s_artist['aname'] ."</option>";  // displaying data in option menu
                        }	
                    ?>  
                </select>
                <a href="reg_artists.php" class="btn btn-success pull-right"><i ></i> + ADD Artists </a>
            </div>

            <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
        </div>

     </div>
    </div>
  </body>
</html>