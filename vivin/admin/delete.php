<?php
include "connection.php";
$IdStruk = $_GET["IdStruk"];
$sql = "DELETE FROM kasir WHERE IdStruk = '$IdStruk'";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<script>
  alert('Data berhasil dihapus');
  window.location.href = 'kasir.php';
  </script>";
} else {
  echo "Failed: " . mysqli_error($conn);
}