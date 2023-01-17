<?php 
if (isset($_POST["submit"])) {
  
  require 'functions.php';

   //cek berhasil atau gagal 
   if ( tambah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>
";
}


  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5 shadow p-3 mb-5 bg-body rounded">
        <h2 class="mb-4 mt-3">Tambah Data Santri</h2>
    <form action="" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Santri/Santriwati</label>
          <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Lengkap</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">No.Telepon</label>
          <input type="text" class="form-control" id="no_telp" name="no_telp">
        </div>
        <div class="mb-3">
          <label for="nama_ayah" class="form-label">Nama Ayah Kandung</label>
          <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
        </div>
        <div class="mb-3">
          <label for="nama_ibu" class="form-label">Nama Ibu Kandung</label>
          <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
        </div>
        <button class="btn btn-success mt-3 mb-3 float-end" type="submit" name="submit">Tambah Data</button>
        <a href="index.php" type="submit" href="" class="btn btn-warning mt-3">Kembali</a>
        <!-- <a href="" type="button" name="submit" class="btn btn-success mt-3 float-end">Tambah User</a>
       <a href="index.php" type="submit" href="" class="btn btn-warning mt-3">Kembali</a> -->
      </form>

    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>