<?php
include "connection.php";

$IdBarangs = $_GET['IdBarang'];

if (isset($_POST["submit"])) {
  $NamaBarang = $_POST['NamaBarang'];
  $SisaStok = $_POST['SisaStok'];
  $TglStok = $_POST['TglStok'];
  $Catatan = $_POST['Catatan'];

  $sql = "UPDATE stokgudang
          SET `NamaBarang`='$NamaBarang',`SisaStok`='$SisaStok',`TglStok`='$TglStok',`Catatan`='$Catatan'
          WHERE IdBarang = '$IdBarangs'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>
  alert('Data berhasil diedit');
  window.location.href = 'stokgudang.php';
  </script>";
    exit();
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../style.css"><br>
  <title>Aplikasikasir</title>
</head>

<body>
  <h2>Aplikasikasir</h2>

    <?php
    $sql = "SELECT * FROM stokgudang WHERE IdBarang = '$IdBarangs'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
      <form action="" method="post">
      <h3>Edit User Information</h3>
        <div class="col">

          <label class="form-label">Nama Barang:</label>
          <input type="text" name="NamaBarang" value="<?php echo $row['NamaBarang'] ?>"><br><br>
      
          <label class="form-label">Sisa Stok:</label>
          <input type="text" name="SisaStok" value="<?php echo $row['SisaStok'] ?>"><br><br>
      
          <label class="form-label">Tanggal Terakhir Stok:</label>
          <input type="date" name="TglStok" value="<?php echo $row['TglStok'] ?>"><br><br>
      
          <label class="form-label">Catatan:</label>
          <input type="text" name="Catatan" value="<?php echo $row['Catatan'] ?>"><br><br>

          <div>
            <button type="submit" name="submit">Update</button><br><br>
            <a href="stokgudang.php">Cancel</a>
          </div>

        </div>

      </form>
    </div>
  </div>

</body>

</html>