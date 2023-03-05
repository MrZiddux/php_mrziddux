<?php 
session_start();
if(isset($_POST['next'])) {
  $_SESSION['name'] = $_POST['name'];
  header('Location: soal2b.php');
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
      <label for="name">Nama Anda:</label>
      <input type="text" name="name" id="name">
    </div>
    <button type="submit" name="next">SUBMIT</button>
  </form>
</body>
</html>
