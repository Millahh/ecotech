@extends('layouts.main')
<link rel="stylesheet" href="/css/landing.css"/>

@section('container')
<section class="header">
    <div class="container container-header">
        <div class="row r-header">
            <div class="col-md-7 isi-header">
                <div class="row">
                    <h6 class="judul">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
                </div>
                <div class="row">
                    <h6 class="desk">Website merupakan salah satu sumber informasi yang paling sering diakses. Saat ini, website merupakan media yang wajib dimiliki oleh perusahaan atau instansi maupun start-up.</h6>
                </div>
                <div class="row">
                    <div class="col-md pt-4">
                        <a href="#" class="btn btn-dftr" style="color:white; background-color: #28DF99">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img class="img-header" src="/image/header.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row pb-4">
            <h4 style="font-weight: bold; font-size: 28px; color: #343A40">Features</h4>        
        </div>
        <div class="row r-card justify-content-md-center">
            <div class="card-fitur col-3">
                <div class="card f-card">
                    <img src="image/atm-machine.png" class="card-img-top" alt="atm-icon">
                    
                    <h5 class="card-title text-center">Scan ATM</h5>
                    
                </div>
            </div>
            <div class="card-fitur col-3">
                <div class="card f-card">
                    <img src="image/wallet.png" class="card-img-top" alt="...">
                    
                    <h5 class="card-title text-center">Wallet</h5>
                    
                </div>
            </div>
            <div class="card-fitur col-3">
                <div class="card f-card">
                    <img src="image/bag-shop.png" class="card-img-top" alt="...">                
                    <h5 class="card-title text-center">Marchant</h5>
                    
                </div>
            </div>
            <div class="card-fitur col-3">
                <div class="card f-card">
                    <img src="image/location.png" class="card-img-top" alt="...">                
                    <h5 class="card-title text-center">Location</h5>                
                </div>
            </div>
    
        </div>
    </div>
</section>

<section class="article">
    <div class="container">
        <div class="row pb-4">
            <h4 style="font-weight: bold; font-size: 28px; color: #343A40">Articles</h4>        
        </div>
        <div class="row row-article">
            <div class="col-md-3 col-card">
                <div class="card a-card">
                    <div class="card-body">
                        <h5 class="card-title article-title">Article 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">12-09-2022</h6>
                        <p class="card-text article-desk">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque ab quam quo enim corrupti! Asperiores tempora id labore at.</p>
        
                    </div>
                </div>            
            </div>
            <div class="col-md-3 col-card">
                <div class="card a-card">
                    <div class="card-body">
                        <h5 class="card-title article-title">Article 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">12-09-2022</h6>
                        <p class="card-text article-desk">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque ab quam quo enim corrupti! Asperiores tempora id labore at.</p>
        
                    </div>
                </div>            
            </div>
            <div class="col-md-3 col-card">
                <div class="card a-card">
                    <div class="card-body">
                        <h5 class="card-title article-title">Article 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">12-09-2022</h6>
                        <p class="card-text article-desk">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque ab quam quo enim corrupti! Asperiores tempora id labore at.</p>
        
                    </div>
                </div>            
            </div>
            <div class="col-md-3 col-card">
                <div class="card a-card">
                    <div class="card-body">
                        <h5 class="card-title article-title">Article 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">12-09-2022</h6>
                        <p class="card-text article-desk">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque ab quam quo enim corrupti! Asperiores tempora id labore at.</p>
        
                    </div>
                </div>            
            </div>
        </div>
        <div class="row py-4 text-center">
            <div class="col">
                <a href="#" class="text-center btn btn-xl" style="color:white">Artikel lainnya</a>
    
            </div>
        </div>    
    </div>
</section>
@endsection