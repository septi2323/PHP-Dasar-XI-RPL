<?php
	$studendt = [ 
		   ['01002','nyai','XI RPL','cijambe','Perempuan','1.jpg'],
		   ['01003','neng','XI RPL','pagaden','Perempuan','2.jpg'],
		   ['01004','husen','XI RPL','cijambe','laki-laki','3.jpg'],
		   ['01003','septi','XI RPL','cibogo','laki-laki','4.jpg']
		];
		$no=1;

	// cara menampilkan array multidimensi
	// var_dump($ds[2][1]);


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
      <th scope="col">Gender</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($studendt as $studendt): ?>
    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><img src="../photo/<?php echo $studendt['5']; ?>" class="rounded"></td>
      <td><?=$studendt['0'] ?></td>
      <td><?=$studendt['1'] ?></td>
      <td><?=$studendt['2'] ?></td>
      <td><?=$studendt['3'] ?></td>
      <td><?=$studendt['4'] ?></td>
      <td>
      	<a href="edit.php?photo=<?= $studendt['5'] ?>&nisn=<?= $studendt['0'] ?>&nama=<?= $studendt['1'] ?>&alamat=<?= $studendt['3'] ?>&kelas=<?= $studendt['2'] ?>&gender=<?= $studendt['4'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
      	<a href="detail.php?photo=<?= $studendt['5'] ?>&nisn=<?= $studendt['0'] ?>&nama=<?= $studendt['1'] ?>&alamat=<?= $studendt['3'] ?>&kelas=<?= $studendt['2'] ?>&gender=<?= $studendt['4'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>

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