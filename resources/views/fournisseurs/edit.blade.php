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
            Modifier fournisseur
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
            <form method="post" action="{{ route('fournisseurs.update', $fournisseur->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nomFournisseur">Nom:</label>
                    <textarea class="form-control" rows="1" name="nomFournisseur">{{ $fournisseur->nomFournisseur }}</textarea>
                </div>
                <div class="form-group">
                    <label for="adresseFournisseur">Adresse:</label>
                    {{--<input type="text" class="form-control" name="adresseFournisseur" value={{ $fournisseur->adresseFournisseur }} />--}}
					<textarea class="form-control" rows="3" name="adresseFournisseur">{{ $fournisseur->adresseFournisseur }}</textarea>
                </div>
                <div class="form-group">
                    <label for="telephoneFournisseur">Téléphone:</label>
                    <input type="text" class="form-control" name="telephoneFournisseur" value={{ $fournisseur->telephoneFournisseur }} />
                </div>
                <div class="form-group">
                    <label for="emailFournisseur">Adresse E-mail:</label>
                    <input type="text" class="form-control" name="emailFournisseur" value={{ $fournisseur->emailFournisseur }} />
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection