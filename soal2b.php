<?php 
session_start();
if(!isset($_SESSION['name'])) {
  header('Location: soal2a.php');
  exit;
}
if(isset($_POST['next'])) {
  $_SESSION['age'] = $_POST['age'];
  header('Location: soal2c.php');
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
      <label for="age">Umur Anda:</label>
      <input type="text" name="age" id="age">
    </div>
    <button type="submit" name="next">SUBMIT</button>
  </form>
</body>
</html>
