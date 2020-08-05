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
            Modifier client
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
            <form method="post" action="{{ route('clients.update', $client->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nomClient">Nom Complet:</label>
                    <textarea class="form-control" rows="1" name="nomClient">{{ $client->nomClient }}</textarea>
                </div>
                <div class="form-group">
                    <label for="adresseClient">Adresse:</label>
                    <textarea class="form-control" name="adresseClient" rows="3">{{ $client->adresseClient }}</textarea>
                </div>
                <div class="form-group">
                    <label for="telephoneClient">Téléphone:</label>
                    <input type="text" class="form-control" name="telephoneClient" value={{ $client->telephoneClient }} />
                </div>
                <div class="form-group">
                    <label for="emailClient">Adresse E-mail:</label>
                    <input type="text" class="form-control" name="emailClient" value={{ $client->emailClient }} />
                </div>
                <button type="submit" class="btn btn-warning">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection