<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Pendaftaran Siswa Baru | SMK Coding</title>

  <style>
    h3, h1 {
      color: white;
    }
    body {
      background-image: linear-gradient(to bottom right, #8eb4e6, #bdd9ff);
      background-repeat: no-repeat;
      background-size: cover;
      height: 695px;
    }
  </style>

</head>
<body>
  <div style="margin-top: 50px; margin-bottom: 50px;">
    <header align="center">
      <h3>Pendaftaran Siswa Baru</h3>
      <h1>SMK Coding</h1>
    </header>
  </div>
  <div class="container rounded-lg p-3 w-25 border bg-light text-center">
    <h4>Menu</h4>
    <nav style="margin-top: 20px;" class="text-center">
        <a href="form-daftar.php" class="btn btn-dark" role="button">Daftar Baru</a> <br><br>
        <a href="list-siswa.php" class="btn btn-info" role="button">Data Pendaftar</a>
    </nav>
    <div style="margin-top: 20px;" class="text-success">
      <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>