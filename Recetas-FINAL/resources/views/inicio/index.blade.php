@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
@endsection
@section('botones')
    <a href={{route('recetas.index')}} class="btn btn-primary mr-2 text-white">Recetas</a>
@endsection
@section('hero')
    <div class="hero-categorias">
    <img src=" https://images.unsplash.com/photo-1446611720526-39d16597055c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80 " width="1350" height="500">
            <form action="{{ route('buscar.show')}}" class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-4 texto-buscar md-2">
                        <p class="display-4">Buscador de recetas</p>
                        <input 
                            type="search" 
                            name="buscar" 
                            placeholder="Buscar receta" 
                            class="form-control"
                        >
                    </div>
                </div>
            </form>
    </div>
@endsection

@section('content')   
    
    <div class="container nuevas-recetas">
        <h2 class="titulo-categoria text-uppercase mb-4">Últimas Recetas</h2>
        <div class="owl-carousel owl-theme">
            @foreach ($nuevas as $nueva)
                <div class="card">
                    <img src="/storage/{{$nueva->imagen}}" class="card-img-top" alt="Imagen Receta">

                    <div class="card-body">
                        <h3>{{ Str::upper($nueva->titulo)}}</h3>

                        <p> {{ Str::words(strip_tags($nueva->preparacion), 30) }} </p>

                    <a href=" {{ route('recetas.show', ['receta' => $nueva->id])}}" class="btn btn-primary d-block font-weight-bold text-uppercase">Ver Receta</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">
            Recetas más votadas
        </h2>
        <div class="row">
                @foreach ($votadas as $receta)
                   @include('ui.receta')
                @endforeach
        </div>
    </div>

    @foreach ($recetas as $key => $grupo)
        <div class="container">
            <h2 class="titulo-categoria text-uppercase mt-5 mb-4">
                {{ str_replace('-', ' ', $key) }}
            </h2>
            <div class="row">
                @foreach ($grupo as $recetas)
                    @foreach ($recetas as $receta)
                       @include('ui.receta')
                    @endforeach
                @endforeach
            </div>
        </div>
    @endforeach
    
@endsection