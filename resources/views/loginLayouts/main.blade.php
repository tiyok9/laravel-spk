<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dash.css" rel="stylesheet">
  </head>
  <body>
   
<div class="container-fluid">
  @if (session('error'))
    <div class="row justify-content-center">
      <div class="col-md-4  mt-4">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>  {{ session('error') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif
    <div class="row justify-content-center mt-4">
        
        <div class="col-md-4">
            <div class="card" >
                <div class="card-body">
                    <h1 class="card-title">Login</h1>
                     <form action="/login" method="POST">
                      @csrf
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="username" name="username" class="form-control" id="username" autofocus required>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Log In</button>
                      </form>
                </div>
              </div>
           
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
</body>
</html>