@extends('master')

@section('title', 'Mettre à jour un bien')

@section('content')



<div class="container ">


  <div class="row">

    <h1 class="mx-auto"> Mettre à jour</h1>


  </div>

  <div class="row">

    <form class="w-50 mx-auto" method="post" action="{{route('postUpdatedBien', $bien->id)}}">

@csrf

      <div class="form-group">
   <label for="type_bien">Type de bien</label>
   <select class="form-control" name='type_bien' id='type_bien' >
     <option value="Appartement"   {{ old('type_bien', $bien->type_bien) == "Appartement" ? 'selected' : '' }} >Appartement</option>
     <option value="Maison" {{ old('type_bien', $bien->type_bien) == "Maison" ? 'selected' : '' }}>Maison</option>
     <option value="Terrain" {{ old('type_bien', $bien->type_bien) == "Terrain" ? 'selected' : '' }}>Terrain</option>
     <option value="Bureau" {{ old('type_bien', $bien->type_bien) == "Bureau" ? 'selected' : '' }}>Bureau</option>
     <option value="Commerce" {{ old('type_bien', $bien->type_bien) == "Commerce" ? 'selected' : '' }}>Commerce</option>
   </select>
 </div>



 <div class="form-group">
<label for="nbre_chambres">Nombre de chambres</label>
<select class="form-control" name='nbre_chambres' id='nbre_chambres' value="{{old('nbre_chambres', $bien->nbre_chambres)}}">
  <option value="1" {{ old('nbre_chambres', $bien->nbre_chambres) == 1 ? 'selected' : '' }} >1</option>
  <option value="2" {{ old('nbre_chambres', $bien->nbre_chambres) == 2 ? 'selected' : '' }}>2</option>
  <option value="3" {{ old('nbre_chambres', $bien->nbre_chambres) == 3 ? 'selected' : '' }}>3</option>
  <option value="4"  {{ old('nbre_chambres', $bien->nbre_chambres) == 4 ? 'selected' : '' }}>4</option>
  <option value="5" {{ old('nbre_chambres', $bien->nbre_chambres) == 5 ? 'selected' : '' }}>5</option>

</select>
</div>


 <div class="form-group">
<label for="ville">Localisation</label>
<select class="form-control" name='ville' value="{{old('ville', $bien->ville)}}">
<option value="Ariana" {{ old('ville', $bien->ville) == "Ariana" ? 'selected' : '' }}>Ariana</option>
<option value="MutuelleVille" {{ old('ville', $bien->ville) == "MutuelleVille" ? 'selected' : '' }}>MutuelleVille</option>
<option value="Menzah" {{ old('ville', $bien->ville) == "Menzah" ? 'selected' : '' }}>Menzah</option>
<option value="El Manar" {{ old('ville', $bien->ville) == "El Manar" ? 'selected' : '' }}>El Manar</option>
<option value="Mnihla" {{ old('ville', $bien->ville) == "Mnihla" ? 'selected' : '' }}>Mnihla</option>
</select>
</div>


 <div class="form-group">
<label for="type_transaction">Type de Transaction</label>
<select class="form-control" name='type_transaction' id='type_transaction' value="{{old('type_transaction', $bien->type_transaction)}}">
<option value="Achat" {{ old('type_transaction', $bien->type_transaction) == "Achat" ? 'selected' : '' }}>Achat</option>
<option value="Vente" {{ old('type_transaction', $bien->type_transaction) == "Vente" ? 'selected' : '' }}>Vente</option>
<option value="Location" {{ old('type_transaction', $bien->type_transaction) == "Location" ? 'selected' : '' }}>Location</option>
</select>
</div>


<div class="form-group">

   <label for="surface">Surface</label>
   <input type="number" class="form-control" name="surface" min="0" max="100000" step="1" required value="{{old('surface', $bien->surface)}}" >

</div>


<div class="form-group">

   <label for="prix">Prix</label>
   <input type="number" class="form-control" name="prix" min="0"  step="1" required  value="{{old('prix', $bien->prix)}}">

</div>



<div class="form-group">
   <label for="description">Description</label>
   <textarea class="form-control" name="description"  rows="3">{{old('description', $bien->description)}}</textarea>
 </div>


  <button type="submit" class="btn btn-success w-100">Submit</button>
</form>

  </div>

</div>


@endsection
