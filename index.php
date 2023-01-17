<?php 

require 'functions.php';
$santri = query("SELECT * FROM tb_santri");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    a {
        text-decoration: none;
    }
    table {
  border-spacing: 30px;
}
</style>
<body>
<div class="container mt-5 mb-5 shadow p-3 mb-5 bg-body rounded">

    <h2 class="mb-4 mt-4 text-center text-dark">
        Daftar Tabel Santri SMK Syafi'i Akrom
    </h2>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari User Disini...." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-primary" type="button" id="button-addon2">Cari User</button>
      </div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No.Telp</th>
        <th>Nama Ayah</th>
        <th>Nama ibu</th>
        <th>Actions</th>
    </tr>
    <?php $i = 1; ?> 
    <?php foreach ( $santri as $row ) : ?>
    <tr>
        <td> <?php echo $i; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["alamat"]; ?></td>
        <td><?php echo $row["no_telp"]; ?></td>
        <td><?php echo $row["nama_ayah"]; ?></td>
        <td><?php echo $row["nama_ibu"]; ?></td>
        <td>
        <a class="text-danger" href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('apakah antum yakin?');"> <i class="bi bi-trash"></i></a> 
        <a class="text-success" href="edit.php"><i class="bi bi-pencil-square"></i></a>
    </td>
    </tr>

       <?php $i++; ?> 

    <?php endforeach; ?>

   
     

    
   
</table>
 <a href="tambah.php" type="button" class="btn btn-primary mt-3 mb-3">Tambah User</a>



</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>