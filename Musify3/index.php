<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname']))

 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUSIFY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
      <nav class="navbar bg-light">
          <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img href="index.html" src="./photos/dvd-disk.png"  width="30" height="30">
                  MUSIFY
          </a>
          </div>
      </nav>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
          </ul>
          <nav class="nav nav-pills nav-fill">
          <a class="btn btn-outline-success" aria-current="page" href="home.php">Home</a>
          <a class="btn btn-outline-success" href="songs.php">Song</a>
          <a class="btn btn-outline-success" href="artists.php">Artists</a>
          <a class="btn btn-outline-success"  href="new songs.php">New Songs</a>
          </nav>
          <form action="search_result.php" class="d-flex" role="search">
            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
              <button  class="btn btn-outline-success" type="submit">Search</button>
          </form>

          <a  class="btn btn-outline-success" href="logout.php">login</a>
          <mdb-navbar position="top" color="orange" scrolling class="navbar-light lighten-5">
          <mdb-navbar-brand href="#" target="_blank">
              <img height="50" src="./photos/airpods.svg"/>
          </mdb-navbar-brand>
          <mdb-navbar-toggler>

              <mdb-navbar-nav right>          
          </div>
      </div>
      
  </nav> 

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <label>User Name</label>
        <div class="form-group">
        <input class="form-control" type="text" name="uname" placeholder="User Name" maxlength="80"><br>
        </div>
        <label>Gmail</label>

        <input class="form-control" type="text" name="gmail" placeholder="gmail"><br> 
        echo "user_name :deltax ,password :deltax@gmail.com"; 
        <button type="submit">Login</button>

     </form>


<?php 
  
include "search_con.php"; 
?>


</body>
<?php 
  
include "./footer/footer_nav.php"; 
?>

</html>