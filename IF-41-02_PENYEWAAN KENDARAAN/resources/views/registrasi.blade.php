

<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{url('asset/css/regist.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
        <div class="jumbotron jumbotron-fluid text-light" style="background-color: #235789">
                <div class="container" >
                  <h1 class="display-4" style="font-weight: bold">Silahkan Pilih Role Anda !</h1>
                  <p class="lead">pilih salah satu aja ya, kalo 2 nggak 1</p>
                </div>
              </div>
    <div class="container-fluid">

            <section class="text-center" style="padding-top:50px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-car m-auto text-primary" style="font-size: 100px"></i>
                            </div>
                            <h3>Menjadi Pemilik</h3>
                            <p class="lead mb-0">Takut mobil anda jarang dipanasin ? bisa sih pilih ini</p>
                            <div class="d-flex justify-content-center" style="margin-top: 10px">
                                <a class="btn btn-primary btn-lg"  href="{{url('/registrasi/owner')}}">Owner</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <i class=" fa fa-male m-auto text-primary" style="font-size: 100px"></i>
                            </div>
                            <h3>Menjadi Customer</h3>
                            <p class="lead mb-0">Mau pansos tapi gabisa nyicil ? bisa juga pilih ini hehe</p>
                            <div class="d-flex justify-content-center" style="margin-top: 10px">
                                <a class="btn btn-primary btn-lg"  href="{{url('/registrasi/customer')}}">Customer</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</body>
    
    