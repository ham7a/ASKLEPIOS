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
            Nouveau fournisseur
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
            <form method="post" action="{{ route('fournisseurs.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nomFournisseur">Nom:</label>
                    <textarea class="form-control" name="nomFournisseur" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="adresseFournisseur">Adresse:</label>
                    <textarea class="form-control" name="adresseFournisseur" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="telephoneFournisseur">Telephone:</label>
                    <input type="text" class="form-control" name="telephoneFournisseur"/>
                </div>
                <div class="form-group">
                    <label for="emailFournisseur">Adresse E-mail:</label>
                    <input type="text" class="form-control" name="emailFournisseur"/>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection