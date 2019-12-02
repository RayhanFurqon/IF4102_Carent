<head>
    <title>Carent.co - siapa ?</title>
    <link rel="stylesheet" href="<?php echo e(url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')); ?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo e(asset('asset/css/simple-sidebar.css')); ?>" rel="stylesheet">
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
            <a href="<?php echo e(url('/login')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px "><i class="fa fa-unlock" style="color: #ffffff; margin-right: 8px"></i> Login </a>
            <a href="<?php echo e(url('/registrasi')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " ><i class="fa fa-plus-square" style="color: #ffffff; margin-right: 10px"></i> Sign Up Now !</a>
            </div>
        </div>
        <div id="page-content-wrapper" style="background-color: #f4f4f5">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
							<img class="d-block w-100" style="background-color:black; width: 100%;height: 150px; ">
							<div class="carousel-caption d-none d-md-block">
								<h2>Tersedia Banyak Pilihan Penyewaan Disini !!!</h2>
								<p>Buru Pilih !!!</p>
							</div>
						  </div>
						  <div class="carousel-item">
							<img class="d-block w-100"  style="background-color: black; width: 100%;height: 150px;">
							<div class="carousel-caption d-none d-md-block">
								<img src="<?php echo e(url('/asset/assets/7.png')); ?>" style="height: 100px;width: 100px">
							</div>
						  </div>
						  <div class="carousel-item">
							<img class="d-block w-100" style="background-color: black; width: 100%;height: 150px;">
							<div class="carousel-caption d-none d-md-block">
								<h2>2 3 Mobil Nganggur ...</h2>
								<p>Sewain aja dong ! </p>
							</div>
						  </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>
                <!-- produk produk -->
                <div class="container-fluid" style="margin-top: 30px">
                  <!-- card 1 -->
                <?php if(count($dataOwner)>0): ?>
                    <div class="row" style="margin-top: 25px;">
                        <!-- card 1 -->
                        <?php $__currentLoopData = $dataOwner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-lg-3 col-xs-12" style="margin-bottom: 35px; ">
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="<?php echo e($g->foto_profile); ?>" alt="Card image cap" style="height: 150px;">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold"><a><?php echo e($g->nama_garasi); ?></a></h4>
                                    <p><?php echo e($g->alamat); ?></p>
                                    <!-- Button -->
                                    <a href="<?php echo e(url('/login')); ?>" class="btn btn-primary deep-purple-text p-1 mx-0 mb-0">Lihat</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php else: ?>
                        <div>MAAF TIDAK TERSEDIA</div>
                <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

</body><?php /**PATH C:\xampp\htdocs\website_carent\resources\views/home.blade.php ENDPATH**/ ?>