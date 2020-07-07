@extends('layouts.app')

@section('content')

<div class="preloader">
    <img src="{{asset('index/img/loader.gif')}}  alt="Preloader image">
</div>

<header id="intro">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="light white" style="color:#ffffff">Choisissez une des actions ci-dessous.</h3>
                        <h1 class="white typed" style="color:white">Gérez votre agence facilement et efficacement !</h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="services" class="section">
    <div class="container">

        <div class="row services justify-content-center">

            <div class="col-sm-4">
                <div class="service bg-light">
                    <div class="icon-holder">
                        <img src="{{asset('index/img/icons/guru-blue.png')}}" alt="" class="icon">
                    </div>
                    <h4 class="heading">Vente</h4>
                    <p class="description">Parcourez la liste des biens disponibles pour la vente ou déjà vendus.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="service bg-light">
                    <div class="icon-holder">
                        <img src="{{asset('index/img/icons/guru-blue.png')}}" alt="" class="icon">
                    </div>
                    <h4 class="heading">Location</h4>
                    <p class="description">Parcourez la liste des biens disponibles pour la location ou louables</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="service bg-light">
                    <div class="icon-holder">
                        <img src="{{asset('index/img/icons/guru-blue.png')}}" alt="" class="icon">
                    </div>
                    <h4 class="heading">Clients</h4>
                    <p class="description">Parcourez la liste de tous vos clients.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="service bg-light">
                    <div class="icon-holder">
                        <img src="{{asset('index/img/icons/guru-blue.png')}}" alt="" class="icon">
                    </div>
                    <h4 class="heading">Contrats</h4>
                    <p class="description">Parcourez la liste des contrats signés.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="service bg-light">
                    <div class="icon-holder">
                        <img src="{{asset('index/img/icons/guru-blue.png')}}" alt="" class="icon">
                    </div>
                    <h4 class="heading">Employés </h4>
                    <p class="description">Parcourez la liste des employés.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="cut cut-bottom"></div>
</section>



@endsection
