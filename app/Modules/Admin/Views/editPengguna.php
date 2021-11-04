<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Pengguna - Arsenal</title>

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
                    <div class="text-center my-2">
                        <img src="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/128/Arsenal-FC-icon.png" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg" style="background-color: #8B0000;">
                        <div class="card-body p-4">
                            <h3 class="fs-4 card-title fw-bold mb-4" style="color: white;">Edit Akun Pengguna</h3>
                            <?php if (isset($validation)) : ?>
                                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                            <?php endif; ?>
                            <form action="<?= base_url('Arsenal/editPengguna') . '/' .  $pengguna['id_pengguna'] ?>" method="post">
                                <div class="mb-3">
                                    <label for="InputForName" class="form-label" style="color: white;">Name</label>
                                    <input type="text" name="username" class="form-control" id="InputForName" value="<?= $pengguna['username'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="InputForEmail" class="form-label" style="color: white;">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= $pengguna['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <div>
                                        <label for="InputForEmail" class="form-label" style="color: white;">Role</label>
                                    </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="admin"<?php if($pengguna['role']=='admin') echo 'checked'?>>
                                    <label class="form-check-label" for="inlineRadio1" style="color: white;">Admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="user"<?php if($pengguna['role']=='user') echo 'checked'?>>
                                    <label class="form-check-label" for="inlineRadio2" style="color: white;">User</label>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="InputForPassword" class="form-label" style="color: white;">Password</label>
                                    <input type="password" name="password" class="form-control" id="InputForPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="InputForConfPassword" class="form-label" style="color: white;">Confirm Password</label>
                                    <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                                </div>
                                <button type="submit" class="btn btn-danger">Edit</button>
                            </form>
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