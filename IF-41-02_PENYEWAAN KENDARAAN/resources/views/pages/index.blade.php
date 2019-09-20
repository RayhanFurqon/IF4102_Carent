@extends('layouts.app')

@section('content')
        <div class="container-fluid" style="background-color: #f4f4f4">
            <div class="row">
                <div class="col">
                    <p id="tagline">Kini, Minjemin Mobil ke Temen Semudah Apa ?</p>
                    <p id="subTagline"> Pesan Sekarang !</p>
                </div>
            </div>
            <div class="row" id="product-list" style="margin-right: 20px">
                <div class="col-sm-4 col-lg-2" id="product-card">
                    <a href="#" class="list-group-item-action">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/images/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ervan Transport</h5>
                                <p class="card-text">Jl. Selat selatan, Malang</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>         
        </div>       
@endsection