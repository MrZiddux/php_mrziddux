<?php

require_once('connect_db.php');

$query = "SELECT p.nama, p.alamat, h.hobi FROM person p LEFT JOIN hobi h ON p.id = h.person_id WHERE 1 = 1 ";
if($_GET['nama'] !== "" && $_GET['nama'] !== null) $query .= "AND p.nama LIKE '%". $_GET['nama'] ."%' ";
if($_GET['alamat'] !== "" && $_GET['alamat'] !== null) $query .= "AND p.alamat LIKE '%". $_GET['alamat'] ."%' ";
if($_GET['hobi'] !== "" && $_GET['hobi'] !== null) $query .= "AND h.hobi = '". $_GET['hobi'] ."' ";
$query .= "GROUP BY p.nama, p.alamat ";
$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->get_result();

$datas = array();
while($row = $result->fetch_assoc()) {
  $datas[] = $row;
}

$statement->close();