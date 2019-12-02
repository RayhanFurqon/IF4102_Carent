<html>
    <head>
        <title> Register </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href ="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid" style="margin-top: 100px" >
            <div class="row">
                <div class="col">
                    <h2 id="header3">
                        <center>Registrasi Owner</center>
                    </h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center" id="form-registrasi">
                <div class="col-3">
                </div>
                <div class="col-6" >
                    <form action="{{url('/registrasi/owner/submit')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="name" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="garasi">Nama Garasi:</label>
                            <input type="text" class="form-control" id="garasi" name="garasi" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input  type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password :</label>
                            <input type="password" class="form-control" id="pwd" name="pass" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Identitas :</label>
                            <input type="file" class="form-control-file border" id="foto" name="file">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-center" >Submit</button>
                        </div>
                        
                    </form>
                </div>

                <div class="col-3">

                </div>
                

            </div>

        </div>
        
    </body>
</html>