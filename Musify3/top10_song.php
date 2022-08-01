
<div class="list-group">
<div class="alert alert-light" role="alert">
  <h1> TOP 10 SONGSs </h1>
  <ul class="nav justify-content-end">
  <a href="reg_song.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> + ADD SONGS </a> 
  <?php
include "dataconn.php"; 

        $query = "SELECT * FROM songs ";
        
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        { 

            foreach($query_run as $items)
            {
                ?>

                <tr><a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <img src="<?= $items['cover']; ?>" class="rounded" width=40 alt="..." class="img-thumbnail">
                        <h5 class="mb-1"><?= $items['sname']; ?></h5>
                        <p class="mb-1"><?= $items['dor']; ?></p>
                        <small class="text-muted"><?= $items['sname']; ?></small>
                        </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small>Donec id elit non mi porta.</small>
                    </a>
                </tr>
                <?php
            }
        }
        else
        {
            ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>
            <?php
        }
?>



<div class="alert alert-light" role="alert">
  <h1> TOP 10 Artists </h1>
  <ul class="nav justify-content-end">
  <?php
include "dataconn.php"; 

        $query = "SELECT * FROM artists ";
        
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        { 

            foreach($query_run as $items)
            {
                ?>

                <tr><a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?= $items['aname']; ?></h5>
                        <p class="mb-1"><?= $items['dob']; ?></p>
                        <small class="text-muted"><?= $items['bio']; ?></small>
                        </div>

                    </a>
                </tr>
                <?php
            }
        }
        else
        {
            ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>
            <?php
        }
?>



    
  </body>
</html>


 