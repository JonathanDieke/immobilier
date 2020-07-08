@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info m-3 float-right" data-toggle="modal" data-target="#exampleModal">
        Ajouter un contrat
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr class="text-center">
                <th># </th>
                <th>Numéro du contrat</th>
                <th>identifiant du bien</th>
                <th>identifiant du client</th>
                <th>identifiant de l employé</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
    
        <tbody class="text-center">
            @foreach($contracts as $contract)
                <tr>
                    <td class="text-truncate">{{$loop->iteration}}</td> 
                    <td><span class="text-muted">TO DO . . .</span></td> 
                    <td>{{$contract->immovable_id}}</td> 
                    <td>{{$contract->client_id}}</td> 
                    <td>{{$contract->employee_id}}</td> 
                    <td>{{$contract->title}}</td> 
                    <td><span class="text-muted">TO DO . . .</span></td> 
                    <td>
                        <button class="btn btn-sm btn-outline-warning">Modifier</button>
                        <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
</div>
@endsection