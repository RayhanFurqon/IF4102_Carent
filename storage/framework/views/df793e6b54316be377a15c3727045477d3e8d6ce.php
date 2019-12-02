

<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo e(url('asset/css/simple-sidebar.css')); ?>" rel="stylesheet">
    <link href="css/garasi.css" rel="stylesheet">
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
		<div id="page-content-wrapper" style="background-color: #f4f4f5">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center" style=" margin-top: 24px;">
                        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                            <div class="well profile">
                                <div class="col-sm-12">
                                    <div class="col-xs-12 col-sm-8 ">
                                        <div style="text-align: center; margin-top: 24px;margin-bottom: 24px">
                                            <h3>Profil</h3>
                                        </div>
                                        <?php if(Session::has('berhasil')): ?>
                                        <div class="alert alert-warning">
                                            <a class="close" data-dismiss="alert">×</a>
                                            <strong>Berhasil !</strong> <?php echo e(Session('berhasil')); ?>

                                        </div>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $data_owner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <center><img src="<?php echo e($d->foto_profile); ?>" class="img-thumbnail" style="margin-bottom: 10px;height: 200px;"></center>
                                        <h2 style="margin-top: 10px;text-align: center"><?php echo e($d->nama); ?></h2>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $data_owner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <form>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" value="<?php echo e($a->email_owner); ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" value="<?php echo e($a->password); ?>" readonly>
                                            </div>
                                            <center>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit_<?php echo e($a->email_owner); ?>">Edit</button>
                                            </center>
                                        </form>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
    <!-- modal -->
    <?php $__currentLoopData = $data_owner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div id="modal-edit_<?php echo e($t->email_owner); ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Profil</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <div class="col-8">
                                <img src="<?php echo e($t->foto_profile); ?>" class="img-thumbnail rounded" style="margin-bottom: 10px;">
                            </div>
                        </center>
                        <form action="<?php echo e(url('/owner/changePP')); ?>"  method="POST" enctype="multipart/form-data">
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
                        <form action="<?php echo e(url('/owner/changePass')); ?> "method="POST">
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

<?php /**PATH C:\xampp\htdocs\website_carent\resources\views/profile-owner.blade.php ENDPATH**/ ?>