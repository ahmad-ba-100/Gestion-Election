@extends('layouts.app')

@section('content')
<div></br></div>
<div class="container ">
   @if(session('success'))
   <div class="alert alert-success mt-3">
        {{session('success')}}

    </div>
   @endif
    <div></br></div>
    <div class="card">
        <div class="card-header bg-info text-white"> Ajouter un candidat </div>
        <div class="card-body">
            <form action="{{ route('store.candidat') }}" method="post">
            @csrf

                <div class="form-group">
                <label class="form-label" for="name">Prénom:</label>
                    <input type="text" name="prenom" id="" class="form-control">
                </div>
                <div></br></div>

                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" class="form-control">
                </div>
                <div></br></div>
                <div class="form-group">
                    <label for="">Date de Naissance</label>
                    <input type="date" name="datenaissance" id="" class="form-control">
                </div>
                <div></br></div>
                <div class="form-group">
                    <label for="">Parti: </label>
                    <input type="text" name="parti" id="" class="form-control">
                </div>
                <div></br></div>

                <div  class="form-group ">
                <button class="btn btn-success">Enregistrer</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection