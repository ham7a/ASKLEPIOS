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
            Modifier medecin
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
            <form method="post" action="{{ route('medecins.update', $medecin->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nomMedecin">Nom:</label>
                    <textarea class="form-control" rows="1" name="nomMedecin">{{ $medecin->nomMedecin }}</textarea>
                    {{--<input type="text" class="form-control" name="nomMedecin" value={{ $medecin->nomMedecin }} />--}}
                </div>
                <div class="form-group">
                    <label for="specialiteMedecin">Spécialité:</label>
                    {{--<input type="text" class="form-control" name="specialiteMedecin" value={{ $medecin->specialiteMedecin }} />--}}
                    <textarea class="form-control" rows="1" name="specialiteMedecin">{{ $medecin->specialiteMedecin }}</textarea>
                </div>
                <div class="form-group">
                    <label for="adresseMedecin">Adresse:</label>
                    {{--<input type="text" class="form-control" name="adresseMedecin" value={{ $medecin->adresseMedecin }} />--}}
                    <textarea class="form-control" rows="3" name="adresseMedecin">{{ $medecin->adresseMedecin }}</textarea>
                </div>
                <div class="form-group">
                    <label for="telephoneMedecin">Téléphone:</label>
                    <input type="text" class="form-control" name="telephoneMedecin" value={{ $medecin->telephoneMedecin }} />
                </div>
                <div class="form-group">
                    <label for="emailMedecin">Adresse E-mail:</label>
                    <input type="text" class="form-control" name="emailMedecin" value={{ $medecin->emailMedecin }} />
                </div>
                <button type="submit" class="btn btn-info">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection