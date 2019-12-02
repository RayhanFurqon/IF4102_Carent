<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/main.css')}}">

</head>

<body style="background-image: url('{{url('/asset/assets/6.jpg')}}');background-size: cover;">
    <div class="container">
        <div class="d-flex justify-content-end">
            <img src="{{url('/asset/assets/7.png')}}" style="height: 100px;">
        </div>
        <div class="row d-flex justify-content-center" style="margin-top: 100px">
            <div class="col-lg-4 col-md-4">
                <form  method="POST" class="bg-warning" action="{{url('/login/auth')}}" style="background-color: white; padding: 10px;border-radius: 12px">
                        {{csrf_field()}}
                        <div class="d-flex justify-content-center" style="margin-bottom: 10px">
                            <h3>Login</h3>
                        </div>
                        @if(Session::has('msg'))
                        <div class="alert alert-danger">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong>Peringatan !</strong> {{Session('msg')}}
                        </div>
                        @endif
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                            <span class="focus-form-control"></span>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="pass" placeholder="Password">
                            <span class="focus-form-control"></span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark">
                                Login
                            </button> 
                        </div>

                    </form>
                <a href="{{url('/registrasi')}}" style="color: white"> belum punya akun ?</a>
            </div>
        </div>
    </div>




    <script src="vendor/jquery/jquery-3.2.1.min.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script src="vendor/animsition/js/animsition.min.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script src="vendor/bootstrap/js/popper.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script src="vendor/select2/select2.min.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script src="vendor/daterangepicker/moment.min.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>
    <script src="vendor/daterangepicker/daterangepicker.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script src="vendor/countdowntime/countdowntime.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script src="js/main.js" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="3808ec665c06fa8efc8e1ab2-text/javascript"></script>
    <script type="3808ec665c06fa8efc8e1ab2-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="3808ec665c06fa8efc8e1ab2-|49" defer=""></script>
</body>

</html>