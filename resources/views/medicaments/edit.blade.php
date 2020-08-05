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
            Modifier medicament
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
            <form method="post" action="{{ route('medicaments.update', $medicament->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nomMedicament">Nom et nature du médicament:</label>
                    <textarea class="form-control" name="nomMedicament" rows="1">{{ $medicament->nomMedicament}}</textarea>
                </div>
                <div class="form-group">
                    <label for="conditionnement">Présentation:</label>
                    <textarea class="form-control" name="conditionnement" rows="1">{{ $medicament->conditionnement }} </textarea>
                </div>
                <div class="form-group">
                    <label for="PPV">PPV:</label>
                    <input type="text" class="form-control" name="PPV" value={{ $medicament->PPV }} />
                </div>
                <div class="form-group">
                    <label for="qty">Quantité:</label>
                    <input type="text" class="form-control" name="qty" value={{ $medicament->qty }} />
                </div>
                <button type="submit" class="btn btn-success">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection