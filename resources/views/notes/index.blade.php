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
</head>
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
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/"> NoteTaking</a>
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


    <div class="container mt-4">


    <form action="/" class="row mb-5">
    <div class="col-md-6">
        <label for="title" class="form-label">Title: </label>
        <input type="text" id="title" name="title" class="form-control" value="">
    </div>
    <div class="col-md-6">
        <label for="date" class="form-label">Date: </label>
        <input type="date" id="date" name="date" class="form-control" value="S">
    </div>
    <div class=" m-3">
        <button class="btn btn-primary">Search</button>
        <a href="notes/create" class="btn btn-success">Add Note</a>
    </div>
</form>


        @foreach($notes as $note)
        <div class="card mb-3">
          <div class="card-body">
          <h5 class="card-title">{{ $note->name }} . <span style="font-size: 1rem">{{ $note->created_at->format('F jS, Y') }}</span></h5>
              <p class="card-text">{{ $note->description}}</p>
              <a href="notes/{{ $note->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
            <a href="notes/{{ $note->id}}/delete" class="btn btn-danger btn-sm">remove</a>
          </div>
        </div>
      @endforeach
      </div>

    <!-- Footer -->
    <footer class="footer">
      <p>© 2023 Copyright: Dwima</p>

</footer>
</body>
</html>