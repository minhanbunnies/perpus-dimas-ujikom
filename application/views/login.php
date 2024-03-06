<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?= base_url('assets1/') ?>css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('assets1/') ?>css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(<?= base_url('assets1/') ?>images/perpus.jpeg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="<?= site_url('login/auth') ?>" class="user" method="post">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username" name="username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                                </div>
                            </form>
                            <p class="text-center">Belum punya akun? <a data-toggle="tab"><a
                                        href="<?= site_url('registrasi') ?>">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets1/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets1/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets1/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets1/') ?>js/main.js"></script>

</body>

</html>