<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
  <header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <h3>Formulir Pendaftaran Siswa Baru</h3>

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
  </header>
  <div class="container border rounded-lg w-25 bg-light" style="margin-top: 20px;">
    <form action="proses-pendaftaran.php" method="POST" class="was-validated">
      <div style="margin: 15px;">
        <div class="form-group">
          <label for="nama">Nama: </label>
          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
          <div class="invalid-feedback">Mohon diisi.</div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat: </label>
          <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required></textarea>
          <div class="invalid-feedback">Mohon diisi.</div>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin: </label>
          <div class="custom-control custom-radio">
            <input id="lk" type="radio" class="custom-control-input" name="jenis_kelamin" value="laki-laki">  
            <label class="custom-control-label" for="lk">Laki-laki</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" name="jenis_kelamin" value="perempuan" id="pr"> 
            <label class="custom-control-label" for="pr">Perempuan</label>
          </div>
        </div>
        <div class="form-group">
          <label for="agama">Agama: </label>
          <select name="agama" class="custom-select">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Katolik</option>
            <option>Hindu</option>
            <option>Budha</option>
            <option>Konghucu</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sekolah_asal">Sekolah Asal: </label>
          <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" class="form-control" required>
          <div class="invalid-feedback">Mohon diisi.</div>
        </div>
        <div class="form-group">
          <input type="submit" value="Daftar" name="daftar" class="btn btn-dark btn-block">
        </div>
      </div>
    </form>
  </div>
</body>
</html>