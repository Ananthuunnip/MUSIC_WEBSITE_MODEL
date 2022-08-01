<?php
include('./header/head_nav.php');

include "dataconn.php"; 

        $query = "SELECT * FROM songs ";
        
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        { 

            foreach($query_run as $items)
            {
                ?>

                <tr>
                    
                    
                      
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                    <img src="photos\dvd-disk.png" class="rounded" width=40 alt="..." class="img-thumbnail">
                      <h5 class="mb-1"><?= $items['sname']; ?></h5>
                      <small>3 days ago</small>
                        </div>
                        <p class="mb-1"><?= $items['dor']; ?></p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                   
                   
                    </div>
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
