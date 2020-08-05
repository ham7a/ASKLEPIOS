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
            Nouveau médecin
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
            <form method="post" action="{{ route('medecins.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nomMedecin">Nom:</label>
                    {{--<input type="text" class="form-control" name="nomMedecin"/>--}}
                    <textarea class="form-control" name="nomMedecin" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="specialiteMedecin">Spécialité(s):</label>
                    <textarea class="form-control" name="specialiteMedecin" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="adresseMedecin">Adresse:</label>
                    {{--<input type="text" class="form-control" name="adresseMedecin"/>--}}
                    <textarea class="form-control" name="adresseMedecin" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="telephoneMedecin">Telephone:</label>
                    <input type="text" class="form-control" name="telephoneMedecin"/>
                </div>
                <div class="form-group">
                    <label for="emailMedecin">Adresse E-mail:</label>
                    <input type="text" class="form-control" name="emailMedecin"/>
                </div>
                <button type="submit" class="btn btn-info">Ajouter</button>
            </form>
        </div>
    </div>
@endsection