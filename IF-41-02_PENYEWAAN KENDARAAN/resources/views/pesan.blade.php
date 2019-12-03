<head>
    <title>Pesan</title>
    @include('sweetalert::alert')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{url('/asset/css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="{{url('/asset/css/profile-owner.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <script src="{{url('/sweetalert.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{url('assets/plugins/datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

</head>

<body>
    <div class="d-flex">
        <div class="border-right" id="sidebar-wrapper" style="background-color: #235789">
            <div class="list-group list-group-flush ">
                    <a href="{{url('/customer/profile')}}" class="list-group-item list-group-item-action" style="background-color: #235789; color: #ffffff;font-size: 20px ">			
                        <i class="fa fa-id-badge" style="color: #ffffff; margin-right: 8px"></i> Profile</a>
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
            @foreach($daftarmenu as $d)
            <div class="jumbotron jumbotron-fluid sticky-top" style="color: #ffffff;background-image: url('{{url('/asset/assets/5.jpg')}}')">
                <div class="row d-flex justify-content-center">
                    <div class="col-2">
                        <center><img src="{{$d->foto_profile}}" class="card-img-top"></center>
                    </div>
                    <div>
                        <h2>{{$d->nama_garasi}}</h2>
                        <p><strong>Alamat: </strong> {{$d->alamat}}</p>
                        
                        <p><strong>Tipe Kendaraan: </strong>
                            @foreach($daftarmobil as $q)
                            <span class="tags">{{$q->jenis_mobil}}</span> 
                            @endforeach
                        </p>
                       
                        @endforeach
                    </div>
                </div>               
            </div>
           
            <div class="container-fluid">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                Jenis Mobil
                            </th>
                            <th scope="col">
                                Golongan
                            </th>
                            <th scope="col">
                                Plat Nomor
                            </th>
                            <th scope="col">
                                Harga
                            </th>
                            <th scope="col">
                                Foto
                            </th>
                            <th scope="col">
                                Status
                            </th>
                            <th scope="col">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($daftarmobil as $a)   
                        <tr class="data-row">
                            <td class="jenis_mobil">
                                {{$a->jenis_mobil}}
                            </td>
                            <td class="golongan">
                                {{$a->golongan}}
                            </td>
                            <td class="id_mobil">
                                {{$a->id_mobil}}
                            </td>
                            <td class="harga">
                                {{$a->harga}}
                            </td>
                            <td>
                                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#pic-modal{{$a->id_mobil}}">Show</button>
                            </td>
                            <td>
                                {{$a->status}}
                            </td>
                            <td>
                                <button class="btn btn-success pesan" id="pesan_btn" >Pesan</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>   
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Gambar -->
    @foreach($daftarmobil as $siap)
        <div id="pic-modal{{$siap->id_mobil}}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    @foreach($daftarmenu as $garasi)
                    <div class="modal-header">
                        <h6><strong>Mobil dari {{$garasi->nama_garasi}}</strong></h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    @endforeach
                    <div class="modal-body">
                        
                        <img src="{{$siap->foto}}" class="img-thumbnail">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
     <!-- Modal Pesan  -->
     <div id="pesan_modal" class="modal fade" role="dialog">
            
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                        <h4><strong>Konfirmasi Pesanan </strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <form id="edit-form" action="{{url('/pesan/confirm/'.$a->email_owner)}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label for="platForm">Plat Nomor</label>
                                        <input  style="text-align: left" class="form-control" type="text" id="id_mobil" name="id_mobil"readonly>
                                        

                                    </div>
                                    <div class="form-group row">
                                        <label for="platForm">Jenis Mobil</label>
                                        <input  style="text-align: left" class="form-control" type="text" id="jenis_mobil"  name="jenis_mobil" readonly>

                                    </div>
                                    <div class="form-group row">
                                        <label for="platForm">Golongan</label>
                                        <input  style="text-align: left" class="form-control" type="text" id="golongan"   name ="golongan"readonly>

                                    </div>
                                    <div class="form-group row">
                                        <label for="platForm">Durasi</label>
                                        <input  style="text-align: left" class="form-control" type="text" id="platForm" name="durasi" required>
 
                                    </div>
                                    <div class="form-group row">
                                        <label for="platForm">Harga</label>
                                        <input style="text-align: left" class="form-control" type="text" id="harga" name="harga" readonly>

                                    </div>
                                   
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Pesan Sekarang !</button>
                 </div>
                </form>
             </div>
         </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('click', "#pesan_btn", function() {
                $(this).addClass('edit-item-trigger-clicked');
                var options = {
                    'backdrop': 'static'
                };
                $('#pesan_modal').modal(options)
            })

            $('#pesan_modal').on('show.bs.modal',function(){
                $(this).addClass('edit-item-trigger-clicked');
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
                var row = el.closest(".data-row");

                var jenis_mobil = row.children('.jenis_mobil').text().replace(/ /g,'');
                var golongan = row.children('.golongan').text().replace(/ /g,'');
                var id_mobil = row.children('.id_mobil').text().replace(/^\s+/g, "");
                var harga = row.children('.harga').text().replace(/ /g,'');

                $("#jenis_mobil").val(jenis_mobil);
                $("#id_mobil").val(id_mobil);
                $("#golongan").val(golongan);
                $("#harga").val(harga);
            })

            $('#pesan_modal').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })
            

        })
    </script>


</body>