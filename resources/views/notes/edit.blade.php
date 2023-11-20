<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noteApp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            
        }


        .footer {
            margin-top: auto;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">NoteTaking </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
     
    </ul>
  </div>
</nav>
@if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
  </div>
@endif

    <div class="container mt-4">
       <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="card mt-3 p-3">
            <h3>Note Edit #{{$note->name}}</h3>
            <form action="/notes/{{$note->id}}/update" method="post" enctype="multipart/form-data">
              @csrf 
              @method('PATCH')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$note->name}}">
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="name">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$note->description}}</textarea>
                @if($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description')}}</span>
                @endif
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
       </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <p>© 2023 Copyright: Dwima</p>

</footer>
</body>
</html>