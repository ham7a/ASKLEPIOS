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
            Nouvelle vente
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
            <form method="post" action="{{ route('ventes.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="clientID">Client:</label>
                    {{--<input type="text" class="form-control" name="clientID"/>--}}
                    <select class="form-control" name="clientID">
                            <option value="">Choisir client...</option>
                        @foreach($clients as $client)
                            <option value="{!! $client['id'] !!}">{!! $client['nomClient'] !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total à payer:</label>
                    <input type="text" class="form-control" name="total"/>
                </div>
                <button type="submit" class="btn btn-danger">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection