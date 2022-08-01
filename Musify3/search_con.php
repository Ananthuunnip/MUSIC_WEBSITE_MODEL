

<?php

include "dataconn.php"; 

    if(isset($_GET['search']))
    {
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM songs WHERE CONCAT(sname) LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $items)
            {
                ?>

                <tr>
                    <h2>Results......</h2>
                    <table class="table table-borderless">
                    <tr>
                    <th  class="align-top" scope="col">cover</th>
                    <th scope="col">Song name</th>
                    <th scope="col">Date of releace</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><?= $items['cover']; ?></td>
                        <td><?= $items['sname']; ?></td>
                        <td><?= $items['dor']; ?></td>
                        </tr>
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
    }
?>