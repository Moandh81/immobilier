@extends('master')

@section('title', 'ajouter un bien')

@section('content')




<div class="container ">


  <div class="row">

    <h1 class="mx-auto my-5"> Liste de vos biens</h1>


  </div>


  @if(Session::has('success'))
  <p class="alert alert-info">{{ Session::get('success') }}</p>
  @endif

  <div class="row">


    <table class="table table-hover text-center">
      <thead>
        <tr>

          <th scope="col">Id Bien</th>
          <th scope="col">Nom Utilisateur</th>
          <th scope="col">Type du bien</th>
          <th scope="col">Type de Transaction</th>
          <th scope="col">Nombre de chambres</th>
          <th scope="col">Surface</th>
          <th scope="col">Prix</th>
          <th scope="col">Détail</th>
          <th scope="col">Mettre à jour</th>
          <th scope="col">Supprimer</th>

        </tr>
      </thead>
      <tbody>

        @foreach($biens as $bien)
        <tr>
          <th scope="row">{{$bien->id}}</th>
          <td>{{$bien->name}}</td>
          <td>{{$bien->type_bien}}</td>
          <td>{{$bien->type_transaction}}</td>

          @if( $bien->nbre_chambres !== null)

          <td>{{$bien->nbre_chambres}}</td>

          @else

          <td>N.A</td>


          @endif
          <td>{{$bien->surface}}</td>
          <td>{{$bien->prix}}</td>



          <td><a href="#" class="btn btn-primary btn" role="button" aria-pressed="true">Description</a>
</td>

          <td><a href="{{route('getUpdatedBien', $bien->id)}}" class="btn btn-info btn" role="button" aria-pressed="true">Modifier</a>
</td>

          <td><a href="{{route('getDeleteBien', $bien->id)}}" class="btn btn-danger btn" role="button" aria-pressed="true">Supprimer</a>
</td>

        </tr>


        @endforeach
      </tbody>
    </table>


</div>

@endsection
