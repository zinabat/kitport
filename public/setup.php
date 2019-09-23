
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KitPort</title>

  <!-- Fonts -->
  <link href="http://localhost:8000/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 mx-auto">
        <header class="lead py-4">
          <h1>
            KitPort
          </h1>
          Setup your Kit!
        </header>

        <div class="card">
        <form method="post" action="#" class="card-body">
          <h5>Database</h5>
          <div class="form-group">
            <input type="text" name="dbhost" placeholder="localhost" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="dbname" placeholder="name of database" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="dbusername" placeholder="username" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="dbpassword" placeholder="password" class="form-control">
          </div>

          <hr>
          <h5>App Stuff</h5>
          <div class="form-group">
            <input type="text" name="appname" placeholder="KitPort" class="form-control">
          </div>
          <hr>
          <h5>Admin Infos</h5>
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
