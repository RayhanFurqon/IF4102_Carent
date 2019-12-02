<head>
	<title>Bayar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="<?php echo e(url('/asset/css/simple-sidebar.css')); ?>" rel="stylesheet">
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
                        Pesan <span class="badge badge-light">9</span></a>
                        <a href="<?php echo e(url('/customer/list-pesanan')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-usd" style="color: #ffffff; margin-right: 10px"></i> Bayar Sekarang !</a>
                        <a href="<?php echo e(url('/customer/checkout')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-file-text-o" style="color: #ffffff; margin-right: 10px"></i> Checkout</a>
                        <a href="<?php echo e(url('/logout')); ?>" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-power-off" style="color: #ffffff; margin-right: 10px"></i> Logout</a>
			</div>
		</div>
		<div id="page-content-wrapper" style="background-color: #f4f4f5">
			<div class="container-fluid">
				<h1 class="mt-4 font-weight-bold" style="text-align: right; color:navy">Carent.co</h1>
				<p class="font-weight-bold"style="text-align: right; font-size: 15px; margin-top: -10">2 3 mobil nganggur </p>
				<p class="font-weight-bold"style="text-align: right; font-size: 15px; margin-top: -14">Sewain aja dong </p>
				<div>
					<div class="container">
						<h2 style="text-align: center">Pembayaran</h2>
						<div style="margin-top: 50px; margin-left: 300px;">
							<table class="table" style="margin-top: 30px;">
								<tbody>
									<tr>
										<form action="<?php echo e(url('/bayar/confirm/'.$pesanan['email'])); ?>" method="POST">
											<?php echo e(csrf_field()); ?>

											<div class="form-group">
												<label class="col-md-4 control-label">Jenis Mobil</label>
												<div class="col-md-8 inputGroupContainer">
													<input type="text" class="form-control" name="email_owner" value="<?php echo e($pesanan['jenis_mobil']); ?>" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Durasi</label>
												<div class="col-md-8 inputGroupContainer">
													<input type="text" class="form-control" name="durasi" value="<?php echo e($pesanan['durasi']); ?> " readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Golongan</label>
												<div class="col-md-8 inputGroupContainer">
													<input type="text" class="form-control" name="golongan" value="<?php echo e($pesanan['golongan']); ?>" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Plat</label>
												<div class="col-md-8 inputGroupContainer">
													<input type="text" class="form-control" name="id_mobil" value="<?php echo e($pesanan['id_mobil']); ?>" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label">Total Bayar</label>
												<div class="col-md-8 inputGroupContainer">
													<input type="text" class="form-control" name="total_bayar" value="<?php echo e($pesanan['harga_total']); ?>"readonly>
												</div>
											</div>
											<div class="form-group">
												<label for="#drPembayaran" class="col-md-4 control-label">Metode Pembayaran</label>
												<div class="col-md-8 inputGroupContainer form-group">			
													<select name="metode">
														<option class="dropdown-item form-control" value="transfer" id="drPembayaran">Transfer</option>
														<option class="dropdown-item form-control" value="cash">Cash</option>
													</select>
													</div>
												</div>
                                            </div>
                                            <div class="col-md-8 inputGroupContainer" style="text-align: center">
                                                <button type="submit" class="btn btn-success" >
                                                    Bayar !
                                                </button>
                                            </div>
                                            
										</form>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
>
</body>
<?php /**PATH C:\xampp\htdocs\website_carent\resources\views/bayar.blade.php ENDPATH**/ ?>