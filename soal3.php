<?php 
require('query.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 3</title>
</head>
<body>
  <table border="1" cellpadding="3" cellspacing="0">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hobi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datas as $data) : ?>
      <tr>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['hobi'] ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>

  <form method="GET">
    <h3>Filter</h3>
    <div>
      <label for="nama">Nama: </label>
      <input type="text" name="nama" id="nama">
    </div>
    <div>
      <label for="alamat">Alamat: </label>
      <input type="text" name="alamat" id="alamat">
    </div>
    <div>
      <label for="hobi">Hobi: </label>
      <input type="text" name="hobi" id="hobi">
    </div>
    <button type="submit">Search</button>
    <button type="reset">Reset</button>
  </form>
</body>
</html>