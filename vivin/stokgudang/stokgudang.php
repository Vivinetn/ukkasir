<?php

session_start();

if(empty($_SESSION['username'])){
  header("location:../index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Pemesanan</title>
  <link href="../admin/kasir.css" rel="stylesheet">
</head>

<body>

<header>
    <div class="navbar">
      <div class="navbar-brand" style="font-size: 40px;">Gudang</div>
      <div>
      <a href="stokgudang.php" style="font-size:20px;">Stok Barang</a>  
      <a href="#myModal" style="font-size:20px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
      </div>
    </div>
  </header>


  <div class="container">
    <?php
    include "connection.php";
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <br>
    <a href="nambahdata.php" class="add-button">Add New</a><br><br>

    <table>
      <thead>
        <tr>
          <th scope="col">Id Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Sisa Stok</th>
          <th scope="col">Tanggal Terakhir Stok</th>
          <th scope="col">Catatan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM stokgudang";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
          die("Query failed: " . mysqli_error($conn));
      }

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["IdBarang"] ?></td>
            <td><?php echo $row["NamaBarang"] ?></td>
            <td><?php echo $row["SisaStok"] ?></td>
            <td><?php echo $row["TglStok"] ?></td>
            <td><?php echo $row["Catatan"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<br><br>
      <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
      <p>Are you sure you want to log out?</p>
      <div class="modal-buttons">
        <button class="yes" onclick="window.location.href='../logout.php';">Yes</button> <!--Ubah Ke Log Out-->
        <button class="no" onclick="document.getElementById('myModal').style.display='none'">No</button><br><br>
      </div>
    </div>
  </div>

  <footer>
    <div class="navbara">
      <div>
      <div class="navbara-brand" style="font-size: 20px; justify-content: space-between;"> @vivin slebew</div>  
      </div>
    </div>
  </footer>

</body>


</html>