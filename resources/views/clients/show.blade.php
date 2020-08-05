{{--@extends('layout')--}}
@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card bg-dark text-white uper" align="center">
        <div class="card-header">
            Informations client
        </div>
        <div align="left" class="card-body">
            Nom Complet: <strong class="text-warning" style="font-size: 20px">{{ $clients['nomClient'] }}</strong><br>
            Adresse: <strong class="text-warning" style="font-size: 20px">{{ $clients['adresseClient'] }}</strong><br>
            Téléphone: <strong class="text-warning" style="font-size: 20px">{{ $clients['telephoneClient'] }}</strong><br>
            Adresse E-mail: <a href="mailto:{{ $clients['emailClient'] }}"> <strong class="text-warning" style="font-size: 20px">{{ $clients['emailClient'] }}</strong></a>
        </div>
    </div>
@endsection