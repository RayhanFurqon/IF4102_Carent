

<head>
	<title>checkout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="<?php echo e(url('asset/css/simple-sidebar.css')); ?>" rel="stylesheet">
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
			<div id="page-content-wrapper" style="background-color: #f4f4f5">
				<div class="container-fluid">
					<h1 style="text-align: center; margin-bottom: 45px">Checkout Pesanan</h1>
					<!-- produk produk -->
					<div class="row">
						<!-- card 1 -->
						<div class="container-fluid">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">
											Nomor Pembayaran
										</th>
										<th scope="col">
											Detail Pesanan
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $checkout; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td>
											<?php echo e($c->id_transaksi); ?>

										</td>
										<td>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail_modal<?php echo e($c->id_transaksi); ?>">Detail</button>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal -->
	<?php $__currentLoopData = $checkout; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div id="detail_modal<?php echo e($cek->id_transaksi); ?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Detail Pembayaran</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Tanggal Pesan</label>
							<input type="text" class="form-control" value="<?php echo e($cek->tgl_transaksi); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Jenis Mobil</label>
							<input type="text" class="form-control" value="<?php echo e($cek->jenis_mobil); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Plat Nomor</label>
							<input type="text" class="form-control" value="<?php echo e($cek->id_mobil); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Nama Pemesan</label>
							<input type="text" class="form-control" value="<?php echo e($cek->nama); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Total Bayar</label>
							<input type="text" class="form-control" value="<?php echo e($cek->total_bayar); ?>" readonly>
						</div>
						<div class="form-group">
							<label>Metode</label>
							<input type="text" class="form-control"value="<?php echo e($cek->metode); ?>" readonly>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

<?php /**PATH C:\xampp\htdocs\website_carent\resources\views/checkout-owner.blade.php ENDPATH**/ ?>