

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

    <title>Admin</title>
  </head>
  <body class="d-flex flex-column h-100">
    <!--Navbar -->
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand p-2 flex-grow-1">ARD's Blog</a>
      <form class="d-flex me-2" method="POST" action="<?= base_url('blog/admin_search')  ?>">
        <input class="form-control me-2 justify-content-end" type="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success me-2 justify-content-end" type="submit"><i class="fa fa-search"> Cari</i></button>
      </form>
      <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        <?= $this->session->userdata('username'); ?>
      </button>
      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="<?= base_url('blog/logout');  ?>">Logout</a></li>
      </ul>
    </div>
    </div>
  </nav>

	<div class="container-fluid">
		<div class="card text-center">
	  		<h5 class="card-header">Ubah Postingan Anda</h5>
	  		<div class="card-body">
	    		<form method="POST" action="<?= base_url('blog/update/').$user['id']  ?>">
				  <div class="mb-3">
				    <!-- <label  class="form-label">Judul</label> -->
				    <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?= $user['judul']; ?>" required>
				  </div>
				  <div class="mb-3">
				   <!--  <label class="form-label">isi</label> -->
				    <textarea class="form-control" placeholder="Ceritakan pengalaman anda" style="height: 100px" name="isi" required><?= $user['isi']; ?></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">UBAH</button>
				</form>
	  		</div>
		</div>
	</div>

  
	<!--footer  -->
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>