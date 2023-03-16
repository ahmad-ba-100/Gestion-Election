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
    <div class="card-hearder bg-dark text-center text-white">     LISTE DES ELECTEURS  </div>

  <thead>
    <tr>
    <th>#</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Numéro CNI </th>
            <th>Candidat</th>
            <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($electeur as $electeurs)
    <tr>
            <td> {{$electeurs->id}}</td>
            <td> {{$electeurs->prenom}}</td>
            <td> {{$electeurs->nom}}</td>
            <td> {{$electeurs->cni}}</td>
            <td> {{$electeurs->candidat_id}}</td>
           
            <td> 
                <a href="#" class="btn btn-warning">Modifier</a>
                <a onclick="return confirm('voulez-vous vraiment supprimer ce candidat ?');" href="#" class="btn btn-success">Supprimer</a>
                
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