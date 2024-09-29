<?php 
$page="/about.php";
if(isset($_REQUEST["name"]))
file_put_contents("data.json",json_encode($_REQUEST));
?><!DOCTYPE html>
<html lang="en">
    <?php 
    include "../includes/head.php"; 
    ?>
<body>
    <?php
    include "../includes/header.php";
    include "../includes/slider.php";
    include "../includes/about.php";
    include "../includes/courses.php";
    (!isset($_REQUEST["name"]))?include "../includes/contactForm.php":include "../includes/thanks.php";
    include "../includes/testimonials.php";
    include "../includes/footer.php";
    ?>
</body>
</html>
<?php
