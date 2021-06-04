<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
  <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./asset/js/popper.js"></script>
  <script src="./asset/js/jquery.js"></script>
  <style>

  </style>
</head>

<body>
  <header>

  </header>
  <main>
    <div class="container">
      <form action="login-process.php" method="POST">
        <div class="row">
          <div class="col-md-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" require><br>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" require>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="rememberMe">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
          <div class="col-md-8">

          </div>
        </div>
      </form>
    </div>
  </main>
</body>

</html>