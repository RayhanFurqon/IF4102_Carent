<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href=<?php echo e(url("asset/css/simple-sidebar.css")); ?> rel="stylesheet">
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
                    <a href="<?php echo e(url('/customer/profile')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">
                        <i class="fa fa-id-badge" style="color: #ffffff; margin-right: 8px"></i> Profil </a>
                        <a href="<?php echo e(url('/home/customer')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-car" style="color: #ffffff; margin-right: 10px"></i>  
                        Pesan </a>
                        <a href="<?php echo e(url('/customer/list-pesanan')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-usd" style="color: #ffffff; margin-right: 10px"></i> Bayar Sekarang !</a>
                        <a href="<?php echo e(url('/customer/checkout')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-file-text-o" style="color: #ffffff; margin-right: 10px"></i> Checkout</a>
                        <a href="<?php echo e(url('/logout')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-power-off" style="color: #ffffff; margin-right: 10px"></i> Logout</a>
			</div>
        </div>
        <div id="page-content-wrapper" style="background-color: #f4f4f5">
                <?php $__currentLoopData = $data_cust; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="jumbotron jumbotron-fluid" style="height: 300px;background-color: black;
            background-image: url('<?php echo e(url('asset/assets/5.jpg')); ?>'); ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-2 ">
                                <img src="<?php echo e($data->foto_profile); ?>" class="img-thumbnail" style="height: 200px;"> 
                        </div>
                        <div class="col-3 text-light">
                                <h1 class="display-4"><span class="fa fa-user-circle"></span> Profile </h1>
                                <h2>Halo, <?php echo e($data->nama); ?></h2>
                        </div>
                    </div>
                </div>      
            </div>
            <section>
			<div class="container-fluid">
                <?php if(Session::has('berhasil')): ?>
                    <div class="alert alert-warning">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>Berhasil !</strong> <?php echo e(Session('berhasil')); ?>

                    </div>
                <?php endif; ?>
				<div class="row d-flex justify-content-center" style=" margin-top: 24px;">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="well profile">
							<div class="col-sm-12">
                                    <form>
                                        <div class="form-group">
                                            <label>Email : </label>
                                            <input type="email" class="form-control" value="<?php echo e($data->email_cust); ?>"readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Password : </label>
                                            <input type="password" class="form-control" value="<?php echo e($data->password); ?>" readonly>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <center>
                                            <button type="button" class="btn btn-primary " style="padding-right: 50px; padding-left: 50px" data-toggle="modal" data-target="#modal-edit">Edit</button>
                                        </center>
                                    </form>
							</div>
						</div>
					</div>
				</div>
            </div>
            </section>
		</div>
    </div>

    <div id="modal-edit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Profil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php $__currentLoopData = $data_cust; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <center>
                    <div class="col-8">
                        <img src="<?php echo e($a->foto_profile); ?>" class="img-thumbnail rounded" style="margin-bottom: 10px; height: 200px;">
                    </div>
                    </center>
                    <form action="<?php echo e(url('/customer/changePP')); ?>"  method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group" style="margin-left:35px;margin-right:35px">
                            <label for="foto">Pilih Foto Baru</label>
                            <input type="file" class="form-control-file border" id="foto" name="file">
                        </div>
                        <div class="d-flex justify-content-start" style="margin-left:35px">
                            <button type="submit" class="btn btn-danger btn-sm">Ganti Foto</button>
                        </div> 
                        
                    </form>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(url('/customer/changePass')); ?> "method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group" style="margin-left:35px;margin-right:35px">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <center>
                            <button type="submit" class="btn btn-success">Ganti</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php /**PATH C:\xampp\htdocs\website_carent\resources\views/profile-cust.blade.php ENDPATH**/ ?>