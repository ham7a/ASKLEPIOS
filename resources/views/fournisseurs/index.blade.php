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
            <div class="alert alert-primary">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <p>
            <input type="text" oninput="w3.filterHTML('#table', '.items', this.value)" placeholder="Chercher..." class="w3-input" autofocus>
        </p>
            <table id="table" class="table table-dark table-hover table-bordered">
                <thead>
                <tr align="center">
                    <td colspan="7"><a href="fournisseurs/create" class="btn btn-primary btn-block" role="button">Nouveau fournisseur</a></td>
                </tr>
                <tr align="center">
                {{--<td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">Id <i class="fa fa-sort" style="font-size:13px;"></i></td>--}}
                <td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">Nom <i class="fa fa-sort" style="font-size:13px;"></i></td>
                <td>Adresse </td>
                <td>N° de téléphone </td>
                <td>Adresse e-mail </td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($fournisseurs as $fournisseur)
                <tr class="items">
{{--                    <td align="right">{{$fournisseur->id}}</td>--}}
                    <td>{{$fournisseur->nomFournisseur}}</td>
                    <td>{{$fournisseur->adresseFournisseur}}</td>
                    <td align="center">{{$fournisseur->telephoneFournisseur}}</td>
                    <td align="center"><a class="btn btn-outline-primary" href="mailto:{{$fournisseur->emailFournisseur}}"><i class="far fa-envelope"></i> {{$fournisseur->emailFournisseur}}</a></td>
                    <td align="center"><a href="{{ route('fournisseurs.edit', $fournisseur->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                    <td align="center">
                        <form action="{{ route('fournisseurs.destroy', $fournisseur->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            {{ $fournisseurs->links() }}
        <div>
@endsection