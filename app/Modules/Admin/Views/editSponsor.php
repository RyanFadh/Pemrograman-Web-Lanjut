<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Sponsor - Arsenal</title>

    <link rel="icon" href="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/24/Arsenal-FC-icon.png">

    <style>
        body {
            background-image: url(https://images5.alphacoders.com/983/thumb-1920-983959.jpg);
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        form{
            position: fixed;
            top: 100px;
            left: 300px;
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
                    <a class="nav-link" href="index">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexManajemen">Manajemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexPemain">Pemain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="indexSponsor">Sponsor</a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="<?= base_url('Arsenal/editSponsor') . '/' .  $sponsor['id_sponsor']?>" method="POST" enctype="multipart/form-data" style="width: 20cm;">
        <div class="form-group">
            <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">ID</label>
            <input name="id_sponsor" class="form-control" type="text" placeholder="Masukkan ID" value="<?= $sponsor['id_sponsor']?>">
        </div>
        <div class="form-group">
            <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">Nama</label>
            <input name="nama" class="form-control" type="text" placeholder="Masukkan Nama" value="<?= $sponsor['nama']?>">
        </div>
        <div class="form-group">
            <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">Jenis</label>
            <input name="jenis" class="form-control" type="text" placeholder="Masukkan Posisi" value="<?= $sponsor['jenis']?>">
        </div>
        <button type="submit" class="btn btn-danger">Kirim</button>
        <a href="indexSponsor" class="btn btn-warning" role="button">Batal</a>
    </form>
</body>

</html>