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
            <div class="alert alert-danger">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <p>
            <input type="text" oninput="w3.filterHTML('#table', '.items', this.value)" placeholder="Chercher..." class="w3-input" autofocus>
        </p>
            <table id="table" class="table table-dark table-hover table-bordered">
            <thead>
            <tr align="center">
                <td colspan="7"><a href="ventes/create" class="btn btn-danger btn-block" role="button">Nouvelle vente</a></td>
            </tr>
            <tr align="center">
                {{--<td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">N° <i class="fa fa-sort" style="font-size:13px;"></i></td>--}}
                <td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">Date <i class="fa fa-sort" style="font-size:13px;"></i></td>
                <td>Client </td>
                <td>Montant (en Dhs) </td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($ventes as $vente)
                <tr class="items">
{{--                    <td align="right">{{$vente->id}}</td>--}}
                    <td>{{$vente->created_at}}</td>
                    <td align="center">
                        {{--<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#clientInfo">--}}
                        {{--{{$vente->clientID}}--}}
                        {{--</button>--}}
                        <a href="{{ route('ventes.show', $vente->clientID)}}" class="btn btn-outline-danger">Informations</a>
                    </td>
                    <td align="right">{{$vente->total}}</td>
                    <td align="center"><a href="{{ route('ventes.edit', $vente->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                    <td align="center">
                        <form action="{{ route('ventes.destroy', $vente->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            {{ $ventes->links() }}

            <div class="modal fade" id="clientInfo">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Détails du client</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <strong>Nom Complet</strong><br>
                            Adresse ligne1<br>
                            Adresse ligne2<br>
                            <br>
                            Téléphone<br>
                            <a href="mailto:adresse@ma.il">Adresse E-mail</a>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>

                    </div>
                </div>
            </div>

    </div>
@endsection