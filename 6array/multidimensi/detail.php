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
    		
    	</div>
    </div>

    <!-- card -->
    <div class="card">
  <div class="card-header">
    Detail siswa
  </div>
  <div class="card-body">
    
    <div class="card-body">
      <div class="row">
        <div class="col-3 ">
           <img src="../photo/<?= $_GET['photo'] ?>" class="rounded" style="width: 100%;">
        </div>
        <div class="col-6">
          <table>
            <tr>
              <td><h5>Nama</h5></td>
              <td class="px-3"><h5>:</h5></td>
              <td><h5><?= $_GET['nama'] ?></h5></td>
            </tr>
            <tr>
              <td><h5>NISN</h5></td>
              <td class="px-3"><h5>:</h5></td>
              <td><h5><?= $_GET['nisn'] ?></h5></td>
            </tr>
            <tr>
              <td><h5>Gender</h5></td>
              <td class="px-3"><h5>:</h5></td>
              <td><h5><?= $_GET['gender'] ?></h5></td>
            </tr>
            <tr>
              <td><h5>Kelas</h5></td>
              <td class="px-3"><h5>:</h5></td>
              <td><h5><?= $_GET['kelas'] ?></h5></td>
            </tr>
            <tr>
              <td><h5>alamat</h5></td>
              <td class="px-3"><h5>:</h5></td>
              <td><h5><?= $_GET['alamat'] ?></h5></td>
            </tr>
          </table>
          <a href="data_siswa.php" class="btn btn-warning">kembali</a>
        </div>
      </div>
    </div>
    
  </div>
 
  </tbody>
</table>
  </div>
</div>
</body>
</html>