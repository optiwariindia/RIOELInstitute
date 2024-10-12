<?php

$mysqli = new mysqli("localhost","webuser","123ewq","rioel");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$resp= $mysqli -> query("select * from visitor");
if(!$resp){
    echo "Error: ". $mysqli -> error;
    exit();
}
// echo "Total ".$resp->num_rows;
// print_r($resp);
?><table>
    <?php
    foreach ($resp->fetch_all() as $key => $value) {
      ?>
      <tr>
        <?php
        foreach ($value as $col) {
            ?>
            <td><?=$col;?></td>
            <?php
        }
        ?>
      </tr>
      <?php 
    }
    ?>
</table>