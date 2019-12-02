<head>
    <title>pesanan anda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{url('/asset/css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="{{url('/asset/css/profile-owner.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex">
        <div class="border-right" id="sidebar-wrapper" style="background-color: #235789">
            <div class="list-group list-group-flush ">
                    <a href="{{url('/customer/profile')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">
                        <i class="fa fa-id-badge" style="color: #ffffff; margin-right: 8px"></i> Profil </a>
                        <a href="{{url('/home/customer')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-car" style="color: #ffffff; margin-right: 10px"></i>  
                        Pesan </a>
                        <a href="{{url('/customer/list-pesanan')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-usd" style="color: #ffffff; margin-right: 10px"></i> Bayar Sekarang !</a>
                        <a href="{{url('/customer/checkout')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-file-text-o" style="color: #ffffff; margin-right: 10px"></i> Checkout</a>
                        <a href="{{url('/logout')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px " >
                        <i class="fa fa-power-off" style="color: #ffffff; margin-right: 10px"></i> Logout</a>
            </div>
        </div>
        <div id="page-content-wrapper" style="background-color: #f4f4f5">
            <div class="container" style="margin-top: 20px; margin-bottom: 30px">
                
                <div class="page-header d-flex justify-content-start">
                    <h1><strong><span class="fa fa-money" style="color:#10940d"></span> Segera lunasi pembayaranmu !</strong></h1>
                    
                </div>
                <button class="btn btn-info" data-toggle="modal" data-target="#bayar-modal">Info Pembayaran Lewat Transfer</button>
            </div>
            <div class="container">
                <div class="row">
                    {{-- card --}}
                    @foreach($transaksi as $t)
                    <div class="col-4">
                        <div class="card text-white bg-dark">
                            <div class="card-header">
                                Nomor Transaksi : {{$t->id_transaksi}}
                            </div>
                            <div class="card-body">
                                <form action="{{url('/customer/lunas/'.$t->id_transaksi)}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>
                                            Metode
                                        </label>
                                        <input class="form-control" type="text" value="{{$t->metode}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                        Total Bayar
                                        </label>
                                        <input class="form-control" type="text" value="{{$t->total_bayar}}" readonly>
                                    </div>
                                @if(($t->metode)=='transfer')
                                    <button type="submit" href="#" class="btn btn-danger">Bayar Sekarang !</button>
                                @endif
                                </form>
                            </div>
                        </div>  
                    </div>
                    @endforeach
                    {{-- end of card --}}
                </div>
            </div>
            
        </div>
    </div>

        <!-- modal -->
        <div id="bayar-modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 style="text-align: center"><strong>
                                        <span class="fa fa-money" style="color:#10940d; margin-right:10px;"></span>Transfer</strong></h1>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            
                            <h5 style="text-align: center"> Tenggat Pembayaran adalah 30 Menit</h5>
                            <h5 style="text-align: center"> Jika Tidak melakukan pembayaran, maka pesanan dianggap batal atau hangus</h5>
                            <h5 style="text-align: center"> NO REKENING TUJUAN : 031745678910 <br>(a.n. Rayhan Furqon)</h5>
                        </div>
                    </div>
                </div>
            </div>


</body>