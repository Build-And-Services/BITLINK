<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body style="background-image: url({{ url('/img/background/login.jpg') }}); background-repeat: no-repeat; background-size: cover; overflow: hidden;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="mt-4">Login</h3>

                    <form action="/login" method="post" class="mt-5">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-success" style="width: 100%;">
                            LOGIN 
                        </button>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input">
                            <label for="" class="form-check-label">Remember Me</label>
                        </div>
                    </form>

                    <p class="mt-4">Website dikelola oleh Dinas Pertanian Provinsi Nganjuk. Baca selengkapnya.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>