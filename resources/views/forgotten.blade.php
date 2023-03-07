<!doctype html>
<html lang="en">
  <head>
    <title>Forgotten password Twiter / Twiter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="icon" href="images/twitter.ico" type="image/x-icon"/>
  </head>
  <body>
  <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 p-0 pt-3">
          <i class="fa fa-twitter"></i>
          <h3 class="text-center pt-3">Forgotten password?</h3>
         <form action="{{url('/')}}/forget" method="post">
         @csrf
            <div class="mb-3 bg-color">
              <label>username</label>
              <input type="text" name="id" class="form-control" required>
            </div>
            <div class="mb-3 bg-color">
              <label>email</label>
              <input type="text" name="detail" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom btn-lg btn-block mt-3"><i>submit</i></button>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
