<?php 
/* 
schema: 
CREATE TABLE `visitor` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` timestamp NOT NULL
);

INSERT INTO `visitor` (`name`, `email`, `phone`, `createdAt`, `updatedAt`)
VALUES ('Om Prakash', 'optiwari.india@gmail.com', '+91 8130202879', now(), now());
*/
$page="/";
if(isset($_REQUEST["name"]))
file_put_contents("data.json",json_encode($_REQUEST));
?><!DOCTYPE html>
<html lang="en">
    <?php include "../includes/head.php"; ?>
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
    <script src="/js/script.js"></script>
</body>
</html>
<?php
