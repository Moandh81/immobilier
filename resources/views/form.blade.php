<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    

<form action="{{route('postForm')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="form-check">
      <label class="form-check-label">
        <input type="file" name="fichier" id="">
        <input type="submit" value="Envoyer">
      </label>
    </div>
</form>


</body>
</html>