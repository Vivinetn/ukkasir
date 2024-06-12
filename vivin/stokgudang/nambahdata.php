<?php

session_start();

if(empty($_SESSION['username'])){
  header("location:../index.php");
  exit();
}

?>

<?php
include "connection.php";

if (isset($_POST["submit"])) {
   $NamaBarang = $_POST['NamaBarang'];
   $SisaStok = $_POST['SisaStok'];
   $TglStok = $_POST['TglStok'];
   $Catatan = $_POST['Catatan'];

   $sql = "INSERT INTO `stokgudang`(`NamaBarang`,`SisaStok`, `TglStok`, `Catatan`)
           VALUES ('$NamaBarang','$SisaStok','$TglStok','$Catatan')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>
      alert('Data berhasil ditambah');
      window.location.href = 'stokgudang.php';
      </script>";
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
   <title>Aplikasi Kasir</title>
</head>

<body>
   <h2>Aplikasi Kasir</h2>

   <div class="container">

         <form action="" method="post">
            <div class="col">
                  <label>Nama Barang:</label>
                  <input type="text" class="form-control" name="NamaBarang" required>
            
                  <label>Sisa Stok:</label>
                  <input type="text" class="form-control" name="SisaStok" required>

                  <label>Tanggal Terakhir Stok:</label>
                  <input type="date" class="form-control" name="TglStok" required><br><br>
                  
                  <label>Catatan:</label>
                  <input type="text" class="form-control" name="Catatan" required>

            <div>
               <button type="submit" name="submit">Save</button><br><br>
               <a href="stokgudang.php">Cancel</a>
            </div>

            </div>
         </form>
   </div>

</body>




</html>