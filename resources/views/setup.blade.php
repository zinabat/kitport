<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 mx-auto">
        <header class="lead py-4">
          <h1>
            {{ config('app.name') }}
          </h1>
          Give life to your Kit!
        </header>

        <div class="card">
        <form method="post" action="#" class="card-body">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="email@example.com" name="email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Hatch my Kit</button>
          </div>
        </form>
        </div><!-- /.card -->
      </div>
    </div><!-- /.row -->
  </div>

    <footer class="fixed-bottom p-2 text-right bg-dark text-white">
      Copyright &copy; Zina Ramirez 2019
    </footer>
  
</body>
</html>
