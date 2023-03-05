<?php 
session_start();
if(!isset($_SESSION['name'], $_SESSION['age'], $_SESSION['hobby'])) {
  header('Location: soal2a.php');
  exit;
}
if(isset($_POST['reset'])) {
  session_unset();
  session_destroy();
  header('Location: soal2a.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 2</title>
</head>
<body>
  <p>Nama: <?= isset($_SESSION['name']) ? $_SESSION['name'] : '' ?></p>
  <p>Umur: <?= isset($_SESSION['age']) ? $_SESSION['age'] : '' ?></p>
  <p>Hobi: <?= isset($_SESSION['hobby']) ? $_SESSION['hobby'] : '' ?></p>
  <form method="POST">
    <button type="submit" name="reset">Reset</button>
  </form>
</body>
</html>

