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
	      <button class="btn btn-outline-success me-2 justify-content-end" type="submit"><i class="fa fa-search"> Cari</i></button>
	    </form>
	    <a href="<?= base_url('blog/login') ?>" class="btn btn-dark me-1"><i class="fa fa-sign-out"> Login </i></a>
	  </div>
	</nav>

	<!-- content -->
	<div class="container">
		<h3>Register Pengguna Baru</h3>
		<div class="card">
		  <h5 class="card-header">Register</h5>
		  <div class="card-body">
		    <form method="POST" action="<?= base_url('blog/post_register'); ?>">
		    	<div class="form-floating mb-3">
				  <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
				  <label for="floatingInput">Username</label>
				</div>
				<div class="form-floating">
				  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
				  <label for="floatingPassword">Password</label>
				  <button type="submit"  class="btn btn-primary my-2">Register</button>
				  <p>Sudah punya akun?<a href=" <?= base_url('blog/login');  ?>" class="link-secondary">klik disini</a></p>
				</div>
		    </form>
		  </div>
		</div>
	

	
	
  	</div>
	<!-- end content -->
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>