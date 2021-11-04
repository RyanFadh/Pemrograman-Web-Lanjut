<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login - Arsenal</title>

    <link rel="icon" href="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/24/Arsenal-FC-icon.png">

    <style>
        body {
            background-image: url(https://images5.alphacoders.com/983/thumb-1920-983959.jpg);
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #card-title {
            color: white;
        }
    </style>
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-4">
                        <img src="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/128/Arsenal-FC-icon.png" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg" style="background-color: #8B0000;">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4" style="color: white;">Login</h1>
                            <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                            <?php endif; ?>
                            <form action="<?= base_url('Login/auth') ?>" method="post">
                                <div class="mb-3">
                                    <label for="InputForEmail" class="form-label mb-2" style="color: white;">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="InputForPassword" class="form-label" style="color: white;">Password</label>
                                    <input type="password" name="password" class="form-control" id="InputForPassword">
                                </div>
                                <button type="submit" class="btn btn-danger">Login</button>
                            </form>
                        </div>
                        <div class="card-footer py-2 border-0">
                            <div class="text-center" style="color: white;">
                                Belum punya akun? <a href="<?= base_url('Register') ?>" style="color: white;">Buat Akun!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>