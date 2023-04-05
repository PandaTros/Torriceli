@extends('layouts.app')

@section('template_title')
{{ $structure->name ?? "{{ __('Show') Structure" }}
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .bg-show {
        background-image: url('https://fondosmil.com/fondo/1812.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .ladder {
        background-color: white;
        border-radius: 15px;
        margin-top: 60px;
    }

    .img-ladder {
        margin-top: -80px;
        border-radius: 15px;
    }

    h3 {
        margin-bottom: -0.5rem !important;
    }

    .estructura {
        color: gray;
        font-weight: 600;
    }

    .bg-show-ll {
        background: rgb(244 243 243);
        border-radius: 10px;

    }
</style>
<div class="bg-show">
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-5 col-lg-4 mx-3 ladder text-center">
                <img src="{{ $structure->foto }}" alt="cargando" class="img-ladder w-75">
                <p>
                <h3>{{ $structure->nombres }}</h3>
                </p>
                <span class="estructura">Estructura {{ $structure->clave }}</span>
                <p>
                    <a href=""><i class="fa fa-fw fa-envelope"></i></a>
                    <a href=""><i class="fa fa-fw fa-phone"></i></a>
                </p>
                <div class="bg-show-ll mx-4 my-4">
                    <div class="py-4">
                        <span class="estructura">Telefono {{ $structure->telefono }}</span>
                        <p class="estructura">Email {{ $structure->correo }}</p>
                        <span class="estructura">{{ $structure->direccion }}</span>
                    </div>

                </div>

            </div>
            <div class="col-5 col-lg-6 mx-3 ladder pb-5">
                <style>
                    .bg-show-ladder-1 {
                        background-color: #eafffc;
                        border-radius: 15px;
                    }

                    .bg-show-ladder-2 {
                        background-color: #e2f2e7;
                        border-radius: 15px;
                    }
                    .bg-show-ladder-3 {
                        background-color: #fbb8b8;
                        border-radius: 15px;
                    }
                </style>
                <h2 class="mt-3 px-3 text-center">Resumen</h2>
                <div class="bg-show-ladder-1 text-center p-2">
                    <strong>{{ $structure->nombres }}</strong> {{ $structure->avance }}
                </div>
                <div class="bg-show-ladder-2 text-center p-2 mt-2">
                    <strong>{{ $structure->municipios }}</strong>
                </div>
                <div class="bg-show-ladder-3 text-center p-2 mt-2">
                    <strong>{{ $structure->secciones }}</strong>
                </div>
            </div>
        </div>
    </div> <br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br> <br><br><br><br>
</div>
@endsection