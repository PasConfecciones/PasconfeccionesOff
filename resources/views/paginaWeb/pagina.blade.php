@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<section id="Galeria" class="Carrusel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  @foreach($inicio as $item)
                    <div class="carousel-item {{$item->class}}">
                        <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100 img-fluid" alt="{{$item->title}}">
                    </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>        
            
            <section id="MisionV" class="mision-vision">
                <div class="item">
                    <img src="{{asset('imagen/'.$Mision->image)}}" alt="Misión" width="200px" height="200px">
                    <h2>MISION</h2>
                    <p>{{$Mision->name}}</p>
                </div>
                
                <div class="item">
                    <img src="{{asset('imagen/'.$Vision->image)}}" alt="Visión">
                    <h2>VISION</h2>
                    <p>{{$Vision->name}}</p>
                </div>
            </section>
        
            <section id="Servicios" class="servicios">
                <div class="container">
                    <h2>Nuestros Servicios</h2>
                    <div class="row contenedor-tarjetas">
                        @foreach($servicios as $item)
                        <!-- Servicio 1 -->
                        <div class="col-md-4 d-flex justify-content-center">
                            <a href="https://wa.me/1234567890" target="_blank" class="tarjeta-link">
                                <div class="tarjeta card h-100 shadow-sm">
                                    <img src="{{asset('imagen/'.$item->image)}}" class="card-img-top" alt="Servicio 1">
                                    <div class="contenido card-body">
                                        <h3 class="titulo card-title">{{$item->title}}</h3>
                                        <p class="descripcion card-text">{{$item->description}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <!-- Botón al final de las tarjetas -->
                        <div class="button-container">
                            <a href="https://payp.page.link/rv2R" target="_blank" class="btn-pay">Realizar Pago</a>
                        </div>
                    </div>
                </div>
            </section> 
@endsection