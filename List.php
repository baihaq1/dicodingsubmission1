<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">List User</h3>
        </div>
        <div class="panel-body">
          <table class="table table-responsive">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Jobs</th>
            </tr>
            <?php
            include_once 'Registrasi.php';
            $obj = new Registrasi();
            $tampil = $obj->showUser();
            while ($data = $tampil->fetch(PDO::FETCH_OBJ)) {
              echo "
              <tr>
                <td>$data->ID</td>
                <td>$data->name</td>
                <td>$data->email</td>
                <td>$data->address</td>
                <td>$data->jobs</td>
              </tr>
              ";
            }
             ?>
          </table>
          <div class="row text-center">
            <button type="button" class="btn btn-primary" name="add" id="add" data-toggle="modal" data-target="#formAdd">Add User</button>
          </div>
        </div>
        <div class="panel-footer">
          Dicoding Azure 2019
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>