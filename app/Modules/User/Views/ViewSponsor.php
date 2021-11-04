<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/e0a2576ffa.js" crossorigin="anonymous"></script>

    <title>Sponsor - Arsenal</title>

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
        <a class="navbar-brand" href="#" style="font-weight: bold;">Arsenal Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('UserControl') ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('UserControl/indexManajemen') ?>">Manajemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('UserControl/indexPemain') ?>">Pemain</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('UserControl/indexSponsor') ?>">Sponsor</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="https://www.arsenal.com/" class="button"><button type="button" class="btn btn-outline-light mr-sm-2" style="font-weight: bold; color: white;">Arsenal.com</button></a>
                <a href="<?= base_url('Login/logout') ?>"><button type="button" class="btn btn-light mr-sm-2" style="font-weight: bold; color: red;">Logout</button></a>
            </form>
        </div>
    </nav>
    <h1></h1>
    <table class="table table-striped table-dark" ; style="width: 20cm;">
        <thead style="background-color: red;">
            <tr style='text-align:center; vertical-align:middle'>
                <th scope="col">Sponsor</th>
                <th scope="col">Jenis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                //gunakan ini jika query-nya memakai $db->query()
                foreach ($sponsor as $row) {
                ?>
            <tr style='text-align:center; vertical-align:middle'>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jenis']; ?></td>
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