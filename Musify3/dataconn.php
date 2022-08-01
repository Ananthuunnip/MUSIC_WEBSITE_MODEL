  <?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "musify";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

