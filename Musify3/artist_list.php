<?php
 include "dataconn.php";

    $query ="SELECT aname FROM artists";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    if(isset($_POST['submit']))
    {
        // Store the Product name in a "name" variable
        $aname = mysqli_real_escape_string($conn,$_POST['aname']);
        
        $sql_insert =
        "INSERT INTO `artists`(`aname`)
            VALUES ('$aname')";
          
          // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
          if(mysqli_query($conn,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
        }
    }
?>

