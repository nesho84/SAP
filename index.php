<?php
$url = "home";

if (isset($_GET['url'])) {
  $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
}

$active = $url;

include "./includes/header.php";
?>

<main id="content" class="px-3">
  <?php
  // Dinamic Content here
  if ($url !== "home") {
    include "./pages/" . $url . ".php";
  } else {
    include "./pages/home.php";
  }
  ?>
</main>

<?php include "./includes/footer.php"; ?>