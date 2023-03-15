@extends('layouts.app')


@section('content')
<div class="container mt-3">
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{session('seccess')}}

    </div>
    @endif
<table class="table">
<div class="card">
    <div class="card-hearder bg-dark text-center text-white">     LISTE DES CANDIDATS  </div>

  <thead>
    <tr>
    <th>#</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance </th>
            <th>parti</th>
            <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($candidat as $candidats)
    <tr>
            <td> {{$candidats->id}}</td>
            <td> {{$candidats->prenom}}</td>
            <td> {{$candidats->nom}}</td>
            <td> {{ $candidats->datenaissance}}</td>
            <td> {{$candidats->parti}}</td>
            <td> 
                <a href="{{route('edit.candidat',$candidats->id)}}" class="btn btn-warning">Modifier</a>
                <a onclick="return confirm('voulez-vous vraiment supprimer ce candidat ?');" href="{{route('delete.candidat',$candidats->id )}}" class="btn btn-success">Supprimer</a>
                
            </td>
    </tr>
    @endforeach
    
  </tbody>
</div>

</table>




    <table classe="table">

        
  
       
    </div>
</div>
    </table>
</div>

@endsection