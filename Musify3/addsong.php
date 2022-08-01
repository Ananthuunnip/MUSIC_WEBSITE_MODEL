<?php 
include "dataconn.php";
    if(isset($_POST['submit'])){

        $c_name = $_POST['c_name'];
        $c_dor = $_POST['c_dor'];
        $c_image = $_FILES['c_image'];
        

         $insert_c = "insert into songs (sname,dor,cover) values ('$c_name','$c_dor','$c_image')";
        $run_c = mysqli_query($conn, $insert_c);

    }



?>