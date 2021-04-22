<?php 

include_once("./partials/config.php");

$pgname = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : "index";


if (isset($pgdata[$pgname])) {
    $title = $pgdata[$pgname]['title'];
    $desc = $pgdata[$pgname]['description'];
    $key = $pgdata[$pgname]['keywords'];
    $page = $pgname;
  } else {
    $title = "404 error page";
    $desc = "404 error page";
    $key = "404 error page";
    $page = "404";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="keywords" content="<?php echo $key; ?>">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
  <title><?php echo $title; ?></title>
</head>
<body class="bg-dark text-white">
<?php 
include("./partials/nav.php");

 if ('./page/' .  $pgname . '.php') {
  echo include_once('./page/' .  $pgname . '.php');
} else {
  echo file_get_contents('./page/404.html');
}
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>