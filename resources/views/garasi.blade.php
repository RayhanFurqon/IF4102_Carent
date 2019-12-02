

<head>
	<title>Garasi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{url('asset/css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="/css/garasi.css" rel="stylesheet">
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
				<a href="{{url('/home/owner')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">
				<i class="fa fa fa-home" style="color: #ffffff; margin-right: 8px"></i> Home </a>
				<a href="{{url('/owner/profile')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">
				<i class="fa fa-id-badge" style="color: #ffffff; margin-right: 8px"></i> Profile </a>
				<a href="{{url('/owner/garasi')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
				<i class="fa fa-car" style="color: #ffffff; margin-right: 10px"></i>  
				Garasi </a>
				<a href="{{url('owner/checkout')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
				<i class="fa fa-file-text-o" style="color: #ffffff; margin-right: 10px"></i> Checkout</a>
				<a href="{{url('/logout')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
				<i class="fa fa-power-off" style="color: #ffffff; margin-right: 10px"></i> Logout</a>
			</div>
		</div>
		<div id="page-content-wrapper" style="background-color: #f4f4f5">
			<div id="page-content-wrapper" style="background-color: #f4f4f5">
				<div class="container-fluid">
					<h1 class="mt-4 font-weight-bold" style="text-align: right; color:navy">Carent.co</h1>
					<p class="font-weight-bold"style="text-align: right; font-size: 15px; margin-top: -10">2 3 mobil nganggur </p>
					<p class="font-weight-bold"style="text-align: right; font-size: 15px; margin-top: -14">Sewain aja dong </p>
					<h1 style="text-align: center; margin-bottom: 45px">Garasi</h1>
					<!-- produk produk -->
					<div class="row">
						<!-- card 1 -->
						<div class="container-fluid">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">
											Golongan
										</th>
										<th scope="col">
											Plat Nomor
                                        </th>
                                        <th scope="col">
                                            Jenis
                                        </th>
                                        <th scope="col">
                                            Action
                                        </th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_mobil as $d)
									<tr>
										<td>
                                            {{$d->golongan}}  
                                        </td>
                                        <td>
                                            {{$d->id_mobil}}
                                        </td>
                                        <td>
                                            {{$d->jenis_mobil}}
                                        </td>
										<td>
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#statusmodal_{{$d->id_mobil}}">Ubah Status</button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal -->
	@foreach ($data_mobil as $m)
	<div id="statusmodal_{{$m->id_mobil}}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Ubah Status </h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				
				<form action='{{url('/owner/changeStatus/'.$m->id_mobil)}}' method='POST'>
					{{csrf_field()}}
					<div class="form-group">
						<label for="sel1">Status saat ini : <span class="badge badge-info">{{$m->status}}</span> </label>
						<select class="form-control" name="status">
							<option value="kosong">kosong</option>
							<option value="penuh">penuh</option>
						</select>
					</div> 
					<button type="submit" class="btn btn-success">Ubah !</button>
				</form>
			</div>
		</div>
	</div>
	</div>
	@endforeach
</body>

