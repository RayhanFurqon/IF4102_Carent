@extends('layouts.app')

@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 id="header3">
                        Registrasi Customer
                    </h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center" id="form-registrasi">
                <div class="col-3">

                </div>
                <div class="col-6">
                    <form action="#" >
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap :</label>
                            <input type="email" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password :</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Identitas :</label>
                            <input type="file" class="form-control-file border" id="foto">
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
@endsection