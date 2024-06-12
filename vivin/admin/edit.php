<?php

session_start();

if(empty($_SESSION['username'])){
  header("location:../index.php");
  exit();
}

?>

<?php
include "connection.php";

$IdStruks = $_GET['IdStruk'];

if (isset($_POST["submit"])) {
  $NamaBarang = $_POST['NamaBarang'];
  $Jumlah = $_POST['Jumlah'];
  $Harga = $_POST['Harga'];
  $TglPesan = $_POST['TglPesan'];

  $sql = "UPDATE kasir
          SET `NamaBarang`='$NamaBarang',`Jumlah`='$Jumlah',`Harga`='$Harga',`TglPesan`='$TglPesan'
          WHERE IdStruk = '$IdStruks'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>
  alert('Data berhasil diedit');
  window.location.href = 'kasir.php';
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
  <link rel="stylesheet" href="../style.css"><br>
  <title>Aplikasikasir</title>
</head>

<body>
  <h2>Aplikasikasir</h2>

    <?php
    $sql = "SELECT * FROM kasir WHERE IdStruk = '$IdStruks'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
      <form action="" method="post">
      <h3>Edit User Information</h3>
        <div class="col">
          <label class="form-label">Nama Barang:</label>
          <input type="text" name="NamaBarang" value="<?php echo $row['NamaBarang'] ?>"><br><br>
      
          <label class="form-label">Jumlah:</label>
          <input type="text" name="Jumlah" value="<?php echo $row['Jumlah'] ?>"><br><br>
    
          <label class="form-label">Harga:</label>
          <input type="text" name="Harga" value="<?php echo $row['Harga'] ?>"><br><br>
   
          <label class="form-label">Tanggal Pemesanan:</label>
          <input type="date" name="TglPesan" value="<?php echo $row['TglPesan'] ?>"><br><br>
      
          <div>
            <button type="submit" name="submit">Update</button><br><br>
            <a href="kasir.php">Cancel</a>
          </div>

        </div>

      </form>
    </div>
  </div>

</body>

</html>