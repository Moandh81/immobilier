@extends('master')

@section('title', 'ajouter un bien')

@section('content')

<div class="container">


  <div class="row">

    <h1 class="mx-auto"> tester l'Upload de photos</h1>



  </div>

  @if(Session::has('success'))
  <div class="row">

  <p class="alert alert-info">{{ Session::get('success') }}</p>
</div>

  @endif


  <div class="row">


    <form method='post' action="{{route('postUploadForm')}}"  enctype='multipart/form-data' class="w-50">
      @csrf
      <div class="form-group">
        <label for="photos[]">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name='photos[]' multiple >
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>

    </form>




  </div>


</div>


<div class="container">
  <div class="row">

    <img src="{{asset('storage/photos/9C9vGEYVQ657koovrnTDvIalcQWLgpFSzXOoRnxX.jpeg')}}">


  </div>
</div>

@endsection
