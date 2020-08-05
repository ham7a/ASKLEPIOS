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
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <p>
            <input type="text" oninput="w3.filterHTML('#table', '.items', this.value)" placeholder="Chercher..." class="w3-input" autofocus>
        </p>
            <table id="table" class="table table-dark table-hover table-bordered">
            <thead>
                <tr align="center">
                    <td colspan="7"><a href="medicaments/create" class="btn btn-success btn-block" role="button">Nouveau médicament</a></td>
                </tr>
                <tr align="center">
                    {{--<td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">N° <i class="fa fa-sort" style="font-size:13px;"></i></td>--}}
                    <td onclick="w3.sortHTML('#table', '.items', 'td:nth-child(1)')" style="cursor:pointer">Nom et nature du médicament <i class="fa fa-sort" style="font-size:13px;"></i></td>
                    <td>Présentation</td>
                    <td>PPV</td>
                    <td>Quantité</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($medicaments as $medicament)
                @if($medicament->qty==0)
                <tr class="items text-danger">
                    @else
                    <tr class="items">
                        @endif
{{--                    <td align="right">{{$medicament->id}}</td>--}}
                    <td>{{$medicament->nomMedicament}}</td>
                    <td>{{$medicament->conditionnement}}</td>
                    <td align="right">{{$medicament->PPV}}</td>
                    <td align="right">{{$medicament->qty}}</td>
                    <td align="center"><a href="{{ route('medicaments.edit', $medicament->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                    {{--<td align="center"><a href="{{ route('medicaments.edit', $medicament->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>--}}
                    <td align="center">
                        <form action="{{ route('medicaments.destroy', $medicament->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            {{--<button class="btn btn-danger" type="submit">Supprimer</button>--}}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="pagination justify-content-center">
                {{ $medicaments->links() }}
            </div>
    </div>
@endsection