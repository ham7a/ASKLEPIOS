{{--@extends('layout')--}}
@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-info">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <p>
            <input type="text" oninput="w3.filterHTML('#table', '.items', this.value)" placeholder="Chercher..." class="w3-input" autofocus>
        </p>
            <table id="table" class="table table-dark table-hover table-bordered">
                <thead>
                <tr align="center">
                    <td colspan="7"><a href="medecins/create" class="btn btn-info btn-block" role="button">Nouveau médecin</a></td>
                </tr>
                <tr align="center">
                {{--<td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">Id <i class="fa fa-sort" style="font-size:13px;"></i></td>--}}
                <td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">Nom <i class="fa fa-sort" style="font-size:13px;"></i></td>
                <td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(2)')" style="cursor:pointer">Spécialité <i class="fa fa-sort" style="font-size:13px;"></i></td>
                <td>Adresse </td>
                <td>N° de téléphone </td>
                <td>Adresse e-mail </td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($medecins as $medecin)
                <tr class="items">
{{--                    <td align="right">{{$medecin->id}}</td>--}}
                    <td>{{$medecin->nomMedecin}}</td>
                    <td>{{$medecin->specialiteMedecin}}</td>
                    <td>{{$medecin->adresseMedecin}}</td>
                    <td align="center">{{$medecin->telephoneMedecin}}</td>
                    <td align="center"><a class="btn btn-outline-info" href="mailto:{{$medecin->emailMedecin}}"><i class="far fa-envelope"></i> {{$medecin->emailMedecin}}</a></td>
                    <td align="center"><a href="{{ route('medecins.edit', $medecin->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                    <td align="center">
                        <form action="{{ route('medecins.destroy', $medecin->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            {{ $medecins->links() }}
        <div>
@endsection