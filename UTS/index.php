<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS 18104030 Pemrograman Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>UTS - Bagian B</h2>
  <p>18104030 bintang adhi n</p>
  <p>Informasi Pemain Klub Sepak Bola Dibawah Asuhan Bambang</p>

<?php
 
$nomor           = array("1","2","3");
$nama_pemain     = array("Cristiano Messi","Bejo Leonardo","Alfa Midi");
$tinggi_badan    = array("180","167","190");
$posisi          = array("Streaker","Midfielder","Defender"); 

$no = count($nomor);
 
echo "<table class='table table-bordered'>";
echo "<thead>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Tinggi Badan</th>";
echo "<th>Posisi</th>";
echo "</tr>";
echo "</thead>";
// looping datanya
echo "<tbody>";
for ($i=0; $i < $no; $i++) { 
  echo "<tr>";
  echo "<td>$nomor[$i]</td>";
  echo "<td>$nama_pemain[$i]</td>";
  echo "<td>$tinggi_badan[$i]</td>";
  echo "<td>$posisi[$i]</td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
 
?>  

</body>
</html>