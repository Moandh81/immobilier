@extends('master')

@section('title', 'ajouter un bien')

@section('content')



<div class="container ">


  <div class="row">

    <h1 class="mx-auto"> Ajouter Un Bien</h1>


  </div>

  <div class="row">

    <form class="w-50 mx-auto" method="post" action='{{route('postForm')}}' enctype='multipart/form-data'>

@csrf

      <div class="form-group">
   <label for="type_bien">Type de bien</label>
   <select class="form-control" name='type_bien' id='type_bien'>
     <option value="Appartement">Appartement</option>
     <option value="Maison">Maison</option>
     <option value="Terrain">Terrain</option>
     <option value="Bureau">Bureau</option>
     <option value="Commerce">Commerce</option>
   </select>
 </div>



 <div class="form-group">
<label for="nbre_chambres">Nombre de chambres</label>
<select class="form-control" name='nbre_chambres' id='nbre_chambres'>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
</div>


 <div class="form-group">
<label for="ville">Localisation</label>
<select class="form-control" name='ville'>
<option value="Ariana">Ariana</option>
<option value="MutuelleVille">MutuelleVille</option>
<option value="Menzah">Menzah</option>
<option value="El Manar">El Manar</option>
<option value="Mnihla">Mnihla</option>
</select>
</div>


 <div class="form-group">
<label for="type_transaction">Type de Transaction</label>
<select class="form-control" name='type_transaction' id='type_transaction'>
<option value="Achat">Achat</option>
<option value="Vente">Vente</option>
<option value="Location">Location</option>
</select>
</div>


<div class="form-group">

   <label for="surface">Surface</label>
   <input type="number" class="form-control" name="surface" min="0" max="100000" step="1" required>

</div>


<div class="form-group">

   <label for="prix">Prix</label>
   <input type="number" class="form-control" name="prix" min="0"  step="1" required>

</div>



<div class="form-group">
   <label for="description">Description</label>
   <textarea class="form-control" name="description"  rows="3"></textarea>
 </div>


 <div class="form-group">
   <label for="photos[]">Photos :</label>
   <input type="file" class="form-control-file" id="exampleFormControlFile1" name='photos[]' multiple >
 </div>


  <button type="submit" class="btn btn-success w-100">Ajouter</button>
</form>

  </div>

</div>


@endsection
