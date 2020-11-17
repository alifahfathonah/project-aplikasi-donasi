<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel=" stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="small mb-1" for="name">Nama Lengkap</label>
                                            <input name="name" class="form-control py-4" id="name" type="text"
                                                aria-describedby="nameHelp" placeholder="Enter your Name" />
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1" for="email">Email</label>
                                            <input name="email" class="form-control py-4" id="email" type="text"
                                                aria-describedby="emailHelp" placeholder="Enter your email" />
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input name="username" class="form-control py-4" id="username" type="text"
                                                aria-describedby="usernameHelp" placeholder="Enter your Username" />
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1" for="password">Password</label>
                                            <input name="password" class="form-control py-4" id="password"
                                                type="password" aria-describedby="passwordHelp"
                                                placeholder="Enter your Password" />
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1" for="telepon">Nomor Telepon</label>
                                            <input name="telepon" class="form-control py-4" id="telepon" type="text"
                                                aria-describedby="teleponHelp" placeholder="Enter your Phone Number" />
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1" for="tanggal_lahir">Tanggal Lahir</label></label>
                                            <input name="tanggal_lahir" class="form-control py-4" id="tanggal_lahir"
                                                type="date" aria-describedby="tanggal_lahirHelp" />
                                        </div>

                                        <div class="form-group mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block" tabindex="4">Buat
                                                Akun</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>