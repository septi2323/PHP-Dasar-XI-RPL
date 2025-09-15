<?php
	$studendt = [ 
		   [
          "nisn"=>"01002",
          "nama"=>"nyai",
          "alamat"=>"cijambe",
          "kelas"=>"XI RPL",
          "gender"=>"Perempuan",
          "photo"=>"1.jpg"
    ],
    [
          "nisn"=>"01003",
          "nama"=>"neng",
          "alamat"=>"pagaden",
          "kelas"=>"XI RPL",
          "gender"=>"Perempuan",
          "photo"=>"2.jpg"
    ],
    [
          "nisn"=>"01004",
          "nama"=>"husen",
          "alamat"=>"cijambe",
          "kelas"=>"XI RPL",
          "gender"=>"laki-laki",
          "photo"=>"3.jpg"
    ],
    [
          "nisn"=>"01003",
          "nama"=>"septi",
          "alamat"=>"cibogo",
          "kelas"=>"XI RPL",
          "gender"=>"laki-laki",
          "photo"=>"4.jpg"
    ],
    [
          "nisn"=>"01005",
          "nama"=>"ujang",
          "alamat"=>"padasuka",
          "kelas"=>"XI RPL",
          "gender"=>"laki-laki",
          "photo"=>"5.jpg"
    ],
    ];
    $no=1;
	 ?>

   
<!DOCTYPE html>
<html>
<head>
	<title>data siswa</title>
	<!-- menghubungkan CDN CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
   <!-- menghubungkan CDN boostrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
    	<div class="container">
    <div class="card">
  <div class="card-header">
    Data siswa
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Foto</th>
      <th scope="col">NISN</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Gender</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($studendt as $studendt): ?>
    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><img src="../photo/<?php echo $studendt['photo']; ?>" class="rounded"></td>
      <td><?=$studendt['nisn'] ?></td>
      <td><?=$studendt['nama'] ?></td>
      <td><?=$studendt['kelas'] ?></td>
      <td><?=$studendt['alamat'] ?></td>
      <td><?=$studendt['gender'] ?></td>
      <td>
      	<a href="edit.php?photo=<?= $studendt['photo'] ?>&nisn=<?= $studendt['nisn'] ?>&nama=<?= $studendt['nama'] ?>&alamat=<?= $studendt['alamat'] ?>&kelas=<?= $studendt['kelas'] ?>&gender=<?= $studendt['gender'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
      	<a href="detail.php?photo=<?= $studendt['photo'] ?>&nisn=<?= $studendt['nisn'] ?>&nama=<?= $studendt['nama'] ?>&alamat=<?= $studendt['alamat'] ?>&kelas=<?= $studendt['kelas'] ?>&gender=<?= $studendt['gender'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>

      </td>
    </tr>
    <?php $no++ ?>
    <<?php endforeach ?>

  </tbody>
</table>
 </div>
</div>
  </div>
</div>
</body>
</html>