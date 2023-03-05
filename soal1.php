<?php

$jml = $_GET['jml'];
echo "<table border=1 cellspacing=0 cellpadding=5>\n";
for ($a = $jml; $a > 0; $a--)
{
  $nilai_total = 0;
  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    $nilai_total += $b;
  }
  echo "<td colspan='$jml'>TOTAL: $nilai_total</td>";
  echo "</tr>\n";
  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    echo "<td>$b</td>";
    $nilai_total += $b;
  }
  echo "</tr>\n";
}
echo "</table>";
