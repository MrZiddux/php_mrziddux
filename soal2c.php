<?php 
session_start();
if(!isset($_SESSION['name'], $_SESSION['age'])) {
  header('Location: soal2b.php');
  exit;
}
if(isset($_POST['next'])) {
  $_SESSION['hobby'] = $_POST['hobby'];
  header('Location: soal2.php');
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
  <form method="post">
    <div>
      <label for="hobby">Hobi Anda:</label>
      <input type="text" name="hobby" id="hobby">
    </div>
    <button type="submit" name="next">SUBMIT</button>
  </form>
</body>
</html>
