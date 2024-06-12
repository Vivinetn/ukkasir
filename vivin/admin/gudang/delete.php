<?php
include "connection.php";
$IdBarang = $_GET["IdBarang"];
$sql = "DELETE FROM stokgudang WHERE IdBarang = '$IdBarang'";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<script>
  alert('Data berhasil dihapus');
  window.location.href = 'stokgudang.php';
  </script>";
} else {
  echo "Failed: " . mysqli_error($conn);
}