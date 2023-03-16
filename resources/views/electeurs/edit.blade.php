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
        <div class="card-header bg-info text-white"> Modifier un electeur </div>
        <div class="card-body">
        <form action="{{ route('update.electeur',$electeur->id ) }}" method="post">
            @csrf

                <div class="form-group">
                    <label class="form-label" for="name">Prénom:</label>
                    <input type="text" name="prenom" id="" class="form-control" value="{{$electeur->prenom}}">
                </div>
                <div></br></div>

                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" class="form-control" value="{{$electeur->nom}}">
                </div>
                <div></br></div>
                <div class="form-group">
                    <label for="">Numéro CNI: </label>
                    <input type="number" name="cni" id="" class="form-control" value="{{$electeur->cni}}">
                </div>
                <div></br></div>

                <div class="form-group">
                    <label for=""> Votre candidat : </label>

                    <select name="candidat_id" class="form-control" aria-label="Default select example">
                        @foreach($candidat as $candidats)

                        <option value="{{$candidats->id}}"  {{ $candidats->id === $electeur->candidat_id ? "selected" : "" }}>{{$candidats->nom}} {{$candidats->prenom}}</option>

                        @endforeach
                    </select>


                </div>

                <div></br></div>

                <div class="form-group ">
                    <button class="btn btn-success">Modifier</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection