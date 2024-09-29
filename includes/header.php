<?php
include_once "functions.php";
$navbar = [
  [
    "link" => "/",
    "text" => "Home"
  ],
  [
    "link" => "/about.php",
    "text" => "About Us"
  ],
  [
    "link" => "/products.php",
    "text" => "Our Courses"
  ],
  [
    "link" => "/faq.php",
    "text" => "Frequently Asked Questions"
  ],
  [
    "link" => "/contact.php",
    "text" => "Contact Us"
  ]
];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <?=getTitle($page);?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
      foreach ($navbar as $key => $item) {
        ?>
        <li class="nav-item">
          <a class="nav-link <?= ($item["link"] == $page) ? "active" : ""; ?>" href="<?= $item["link"]; ?>"><?= $item["text"]; ?></a>
        </li>
        <?php
      }
      /*
      for ($i = 0; $i < count($navbar); $i++) {
          $item=$navbar[$i];
          ?>
          <li class="nav-item">
            <a class="nav-link <?= ($item["link"]==$page)?"active":"";?>" href="<?=$item["link"];?>"><?=$item["text"];?></a>
          </li>
          <?php
      }
          */
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>