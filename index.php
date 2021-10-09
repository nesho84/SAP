<?php
session_start();

$active = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);

include "./includes/header.php";
?>

<main id="content" class="px-3">
  <?php
  // Dinamic Content here
  if (isset($_GET['url'])) {
    $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
    include "./pages/" . $url . ".php";
  } else {
    include "./pages/home.php";
  }
  ?>
</main>

<?php include "./includes/footer.php"; ?>