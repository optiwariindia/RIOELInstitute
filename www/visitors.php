<?php
include "../vendor/autoload.php";
include "../includes/connection.php";
include "../includes/Visitor.php";
include "../includes/head.php";
if (isset($_REQUEST['name']) && isset($_REQUEST['email'])&& isset($_REQUEST['phone'])) {
  $visitor=new Visitors(
    null, $_REQUEST['name'], $_REQUEST['email'], $_REQUEST['phone']
  );
  $visitor->save();
  header("Location: /visitors.php");
  # code...
}
$visitors=new Visitors();
$allVisitors=$visitors->getAll();
?> <ul class="visitor-list">
?>
<?php
foreach ($allVisitors as $key => $visitor) {
  ?>
  <li>
    <div class="name">
      <span>Name:</span> <?=$visitor->name;?>
    </div>
    <div class="email">
      <span>E-Mail:</span> <?=$visitor->email;?>
    </div>
    <div class="phone">
      <span>Phone:</span> <?=$visitor->phone;?>    
    </div>
  </li>
  <?php
}
?>
</ul><?php
// $allVisitors=$visitor->getAll();
// $visitor->update(3,[
//   'name'=>"New Name",
//   "email"=>"newEmail@domain.tld",
//   "phone"=> "+919876543210"
// ]);
// print_r($visitor->getAll());
die();

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