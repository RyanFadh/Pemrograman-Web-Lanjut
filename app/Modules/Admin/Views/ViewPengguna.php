<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/e0a2576ffa.js" crossorigin="anonymous"></script>

    <title>Pengguna - Arsenal</title>

    <link rel="icon" href="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/24/Arsenal-FC-icon.png">

    <style>
        body {
            background-image: url(https://images5.alphacoders.com/983/thumb-1920-983959.jpg);
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        table {
            position: fixed;
            top: 100px;
            left: 300px;
            border-collapse: separate;
            border: solid black 1px;
            border-radius: 5px;
            -moz-border-radius: 5px;
        }

        td,
        th {
            border-left: solid black 1px;
            border-top: solid black 1px;
        }

        th {
            border-top: none;
        }

        td:first-child,
        th:first-child {
            border-left: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" ; style="background-color: red;">
        <a class="navbar-brand" style="font-weight: bold;">Arsenal Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Arsenal') ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Arsenal/indexManajemen') ?>">Manajemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Arsenal/indexPemain') ?>">Pemain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Arsenal/indexSponsor') ?>">Sponsor</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('Arsenal/indexPengguna') ?>">Pengguna</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?= base_url('Register') ?>"><button type="button" class="btn btn-light mr-sm-2"><i class="fas fa-plus" style="color: red;"></i></button></a>
                <a href="<?= base_url('Login/logout') ?>"><button type="button" class="btn btn-light mr-sm-2" style="font-weight: bold; color: red;">Logout</button></a>
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="background-color: white; color: red">Go</button> -->
            </form>
        </div>
    </nav>
    <h1></h1>
    <table class="table table-striped table-dark" ; style="width: 20cm;">
        <thead style="background-color: red;">
            <tr style='text-align:center; vertical-align:middle'>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Editor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                //gunakan ini jika query-nya memakai $db->query()
                foreach ($pengguna as $row) {
                ?>
            <tr style='text-align:center; vertical-align:middle'>
                <td><?= $row['username']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <a href="<?= base_url('arsenal/ubahPengguna') . '/' . $row['id_pengguna'] ?>"><button type="button" class="btn mr-sm-2" style="background-color: white; color: red"><i class="far fa-edit"></i></button></a>

                    <a href="<?= base_url('arsenal/hapusPengguna') . '/' . $row['id_pengguna'] ?>"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
                </td>
            </tr>
        <?php
                }
        ?>
        </tr>
        </tbody>
    </table>
    <div class="fixed-bottom">
        <?= $pager->links('bootstrap', 'bootstrap_pagination') ?>
    </div>
</body>

</html>