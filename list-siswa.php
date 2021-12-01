<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
  <header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
      body {
        background-image: linear-gradient(to bottom right, #8eb4e6, #bdd9ff);
        background-repeat: no-repeat;
        background-size: cover;
        height: 695px;
      }
      h3 {
        text-align: center;
        margin-top: 50px;
        color: #071e3d;
      }
    </style>

    <h3>Siswa yang sudah mendaftar</h3>
  </header>
  <nav class="text-center" style="margin-top: 20px;">
    <a href="form-daftar.php" class="btn btn-dark">Tambah Baru</a>
  </nav>
  <br>
  <div class="container border bg-light rounded-lg">
    <div class="text-center">
      <table border="1" style="margin-top:20px;" align="center" class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>Asal Sekolah</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM calon_siswa";
          $query = mysqli_query($db, $sql);

          while($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
          }
        ?>
      </tbody>
      </table>

      <p class="font-weight-bold">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
  </div>
</body>
</html>