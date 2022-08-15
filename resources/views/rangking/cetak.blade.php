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
    <div class="container">
  
        <h4 class="mt-4 text-center">Rangking Karyawan</h4>
       
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jumlah Nilai</th>
                     
                    </tr>
                  </thead>
                    <tbody class="table-group-divider">
                      @foreach($rang as $ni )
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td >{{$ni->user->name}}</td>
                        <td >{{$ni->nilai_rangking}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
  </body>
</html>
