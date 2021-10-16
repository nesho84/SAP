<?php
$url = "home";

if (isset($_GET['url'])) {
  $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
}

$active = $url;

require __DIR__ . "/library/PDF.php";
include __DIR__ . "/includes/header.php";
?>

<main id="content" class="px-3">
  <?php
  // Dinamic Content here
  if (isset($_GET['url'])) {
    $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
    include __DIR__ . "/pages/" . $url . ".php";
  } else {
    include __DIR__ . "/pages/home.php";
  }
  ?>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>