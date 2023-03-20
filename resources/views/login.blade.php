<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.css">
</head>

<body class="hold-transition login-page">
    <div class="container">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div style="text-align: center"><img src="https://upload.wikimedia.org/wikipedia/id/2/2b/Perhutani_logo.svg"
                    style="padding-top: 2%" height="25%" width="25%">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="p-1">
                        <div class="card card-outline rouded-lg mt-5 card-primary">
                            {{-- <strong class="text-center d-block">Form <span class="text-primary">LogIn</span></strong>
                        </div> --}}
                        <div class="card-body">
                            <form action="/ceklogin" method="POST">
                                @csrf
                                <div class="card-header text-center">
                                  <a href="/" class="h1"><b>Eviden</b>Poin</a>
                                </div>
                                <p class="login-box-msg" style="font-size: 14px">Perum Perhutani KPH Semarang</p>
                                
                                <div class="input-group mb-3">
                                    <input type="text" name="nip" class="form-control" placeholder="NIP" Required
                                        autocomplete="off" autofocus>
                                        <div class="input-group-append">
                                          <div class="input-group-text">
                                              <span class="fas fa-id-card"></span>
                                          </div>
                                      </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" Required
                                        autocomplete="off">
                                        <div class="input-group-append">
                                          <div class="input-group-text">
                                              <span class="fas fa-lock"></span>
                                          </div>
                                      </div>
                                </div>
                                <div class="form-group col-12">
                                    <input name="" id="" class="btn btn-successv2 btn-block" type="submit"
                                        value="Login">
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
