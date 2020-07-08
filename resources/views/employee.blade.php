@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info m-3 float-right" data-toggle="modal" data-target="#exampleModal">
        Ajouter un employé
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
                <th>Nom & Prénoms</th>
                <th>Pièce Identité</th>
                <th>Date de naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
    
        <tbody class="text-center">
            @foreach($employees as $employee)
            <tr>
                <td class="text-truncate">{{$loop->iteration}}</td> 
                <td class="text-truncate">{{$employee->firstname .' '. $employee->lastname }}</td> 
                <td>{{$employee->identity}}</td> 
                <td>{{$employee->birthday}}</td> 
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