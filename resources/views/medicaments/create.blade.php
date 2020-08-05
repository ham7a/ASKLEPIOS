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
            Nouveau médicament
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
            <form method="post" action="{{ route('medicaments.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nomMedicament">Nom et nature du médicament:</label>
                    <textarea class="form-control" name="nomMedicament" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="conditionnement">Présentation:</label>
                    <textarea class="form-control" name="conditionnement" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="PPV">PPV:</label>
                    <input type="text" class="form-control" name="PPV"/>
                </div>
                <div class="form-group">
                    <label for="qty">Quantité:</label>
                    <input type="text" class="form-control" name="qty"/>
                </div>
                <button type="submit" class="btn btn-success">Ajouter</button>
            </form>
        </div>
    </div>
@endsection