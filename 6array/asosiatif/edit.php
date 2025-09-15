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
    edit siswa
  </div>
  <div class="card-body">
    
    <div class="card-body">
      <div class="row">
        <div class="col-3 ">
           <img src="../photo/<?= $_GET['photo'] ?>" class="rounded" style="width: 100%;">
        </div>
        <div class="col-6">
          <table>
           <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NISN</label>
              <input type="text" value="<?= $_GET['nisn'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" value="<?= $_GET['nama'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kelas</label>
              <input type="text" value="<?= $_GET['kelas'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Gender</label>
              <input type="text" value="<?= $_GET['gender'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="text" value="<?= $_GET['alamat'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
           </form>
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