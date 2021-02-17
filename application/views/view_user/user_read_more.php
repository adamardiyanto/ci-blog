<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>ARD Blog</title>
  </head>
  <body class="d-flex flex-column h-100">
    <!--Navbar -->
    <nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand p-2 flex-grow-1">ARD's Blog</a>
	    <form class="d-flex me-2" method="POST" action="<?= base_url('blog/search')  ?>">
	      <input class="form-control me-2 justify-content-end" type="search" placeholder="Search" aria-label="Search" required>
	      <button class="btn btn-outline-success me-2 justify-content-end" type="submit"><i class="fa fa-search" required> Cari</i></button>
	    </form>
	    <a href="<?= base_url('blog/login') ?>" class="btn btn-dark me-1"><i class="fa fa-sign-out"> Login </i></a>
	  </div>
	</nav>

	<!-- jumbotron -->
	<div class="container">
	<div class="jumbotron jumbotron-fluid my-3">
	  <div class="container">
	    <h1 class="display-3">ARD's Blog</h1>
	    <p class="lead">Selamat datang di halaman blog saya. Selamat menikmati.</p>
	  </div>
	</div>
	<!-- end jumbotron -->
	
	<!-- content -->
	
		<a href="<?= base_url('blog') ?>" class="btn btn-outline-success d-md-flex justify-content-md-start ms-2 "  style="width: 5rem;"><i class="fa fa-home"> Home</i></a>
		<div class="card mx-2 my-2">
		  <div class="card-body">
		    <h5 class="card-title"><?= $user['judul'];  ?></h5>
		    <p class="card-text"><?= $user['isi'];  ?></p>
		  </div>
		</div>
  	</div>
	<!-- end content -->
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>