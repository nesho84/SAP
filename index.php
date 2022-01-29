<?php

$url = isset($_GET['url']) ? filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL) : "home";

$active = $url;

require __DIR__ . "/library/PDF.php";
include __DIR__ . "/includes/header.php";
?>

<main id="content" class="px-3">
  <!-- // Dinamic Content START -->
  <?php
  if ($url) {
    include __DIR__ . "/pages/" . $url . ".php";
  } else {
    include __DIR__ . "/pages/home.php";
  }
  ?>
  <!-- // Dinamic Content END -->
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>