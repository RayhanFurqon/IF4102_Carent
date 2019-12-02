<head>
	<title>Carent.co</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="<?php echo e(url('/asset/css/simple-sidebar.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('/asset/css/landing-page.min.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="d-flex">
		<div class="border-right" id="sidebar-wrapper" style="background-color: #235789">
			<div class="list-group list-group-flush">
				<a href="<?php echo e(url('/home/owner')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">
				<i class="fa fa fa-home" style="color: #ffffff; margin-right: 8px"></i> Home </a>
				<a href="<?php echo e(url('/owner/profile')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">
				<i class="fa fa-id-badge" style="color: #ffffff; margin-right: 8px"></i> Profile </a>
				<a href="<?php echo e(url('/owner/garasi')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
				<i class="fa fa-car" style="color: #ffffff; margin-right: 10px"></i>  
				Garasi </span></a>
				<a href="<?php echo e(url('owner/checkout')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
				<i class="fa fa-file-text-o" style="color: #ffffff; margin-right: 10px"></i> Checkout</a>
				<a href="<?php echo e(url('/logout')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
				<i class="fa fa-power-off" style="color: #ffffff; margin-right: 10px"></i> Logout</a>
			</div>
		</div>
		<div id="page-content-wrapper" >
				<?php if(Session::has('msg')): ?>
				<div class="alert alert-warning">
					<a class="close" data-dismiss="alert">×</a>
					<strong>Peringatan !</strong><br> <?php echo e(Session('msg')); ?>

				</div>
				<?php endif; ?>

				<?php if(Session::has('pesan')): ?>
				<div class="alert alert-warning">
					<a class="close" data-dismiss="alert">×</a>
					<strong>Maaf</strong><br> <?php echo e(Session('pesan')); ?>

				</div>
				<?php endif; ?>
			<div class="jumbotron jumbotron-fluid overlay" style="background-color:black;padding-bottom:100px;">
				<div class="container">
					<h1 class="display-4" style="color:white;font-weight: bold">Anda Tidak Mau Mobil Anda Bernasib Seperti Background Ini ?</h1>
					<p class="lead" style="color:white">Segera Pinjamkan Mobil Anda ! Kalo Nganggur Aja </p>
					<a class="btn btn-success" href="<?php echo e(url('/owner/garasi')); ?>">Klik sini aja !</a>
				</div>
			</div>
			<section class="features-icons bg-light text-center" style="padding-top:50px">
				<div class="container">
				  <div class="row">
					<div class="col-lg-4">
					  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
						  <i class="fa fa-automobile m-auto text-primary"></i>
						</div>
						<h3>Kendaraan Bebas</h3>
						<p class="lead mb-0">Mau pickup, hatchback, bahkan bus pun kita siap melayani !</p>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
						  <i class="fa fa-dollar m-auto text-primary"></i>
						</div>
						<h3>Menghasilkan</h3>
						<p class="lead mb-0">Bayangkan, kesehatan mobil anda terjamin dan menghasilkan uang. Nikmat Tuhan Manakah Yang Engkau Dustakan</p>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
						  <i class="fa fa-check-square m-auto text-primary"></i>
						</div>
						<h3>Mudah Digunakan</h3>
						<p class="lead mb-0">Tinggal registrasi, anda bisa menyewakan kendaraan kapan saja dan dimana saja!</p>
					  </div>
					</div>
				  </div>
				</div>
			</section>
		</div>
	</div>
</body>

<?php /**PATH C:\xampp\htdocs\website_carent\resources\views/home_owner.blade.php ENDPATH**/ ?>