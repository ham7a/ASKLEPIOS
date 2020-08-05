{{--@extends('layout')--}}
@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Nouveau client
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('clients.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nomClient">Nom complet:</label>
                    <textarea class="form-control" name="nomClient" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="adresseClient">Adresse:</label>
                    <textarea class="form-control" name="adresseClient" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="telephoneClient">Téléphone:</label>
                    <input type="text" class="form-control" name="telephoneClient"/>
                </div>
                <div class="form-group">
                    <label for="emailClient">Adresse E-mail:</label>
                    <input type="text" class="form-control" name="emailClient"/>
                </div>
                <button type="submit" class="btn btn-warning">Ajouter</button>
            </form>
        </div>
    </div>
@endsection