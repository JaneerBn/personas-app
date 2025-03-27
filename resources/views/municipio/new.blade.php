<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Municipality</title>
  </head>

  <body>
   <div class="container">
    <h1>Add Municipality</h1>
    <form method="POST" action="{{ route('municipios.store') }}">
     @csrf 
    <div class="mb-3">
    <label for="id" class="form-label">Code</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
        disabled = "disabled">
        <div id="idHelp" class="form-text">Municipality code</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Municipality</label>
    <input type="text" required class="form-control" id= "name" aria-describedby = "nameHelp"
        name = "name" placeholder = "municipio.name">
  </div>
  <label for = "department">Department:</label>
    <select class = "form-select" id="department" name = "code" required>
        <option selected disabled value = "">Choose one...</option>
        @foreach ($departamentos as $departamento)
            <option value = "{{$departamento -> depa_codi}}"> {{$departamento -> depa_nomb}} </option>
        @endforeach
</select>
  <div class="mb-3 form-check">
  <button type = "submit" class = "btn btn-primary"> save </button>
  <a href = "{{route ('municipios.index') }}" class = "btn btn-warning">Cancel</a>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>