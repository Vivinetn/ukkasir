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
  $Jumlah = $_POST['Jumlah'];
  $Harga = $_POST['Harga'];
  $TglPesan = $_POST['TglPesan'];

   $sql = "INSERT INTO `kasir`(`NamaBarang`, `Jumlah`, `Harga`, `TglPesan`)
           VALUES ('$NamaBarang','$Jumlah','$Harga','$TglPesan')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>
      alert('Data berhasil ditambah');
      window.location.href = 'user.php';
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
         <h3>Add New</h3>

         <form action="" method="post">
            <div class="col">
            <label>Nama Barang:</label>
                  <input type="text" class="form-control" name="NamaBarang" required>
            
                  <label>Jumlah:</label>
                  <input type="text" class="form-control" name="Jumlah" required>

                  <label>Harga:</label>
                  <input type="text" class="form-control" name="Harga" required>
               
                  <label>Tanggal Pesan:</label>
                  <input type="date" class="form-control" name="TglPesan" required><br><br>

            <div>
               <button type="submit" name="submit">Save</button><br><br>
               <a href="user.php">Cancel</a>
            </div>

            </div>
         </form>
   </div>

</body>




</html>