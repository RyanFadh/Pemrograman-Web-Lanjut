<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Manajemen - Arsenal</title>

    <link rel="icon" href="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/24/Arsenal-FC-icon.png">

    <style>
        body {
            background-image: url(https://images5.alphacoders.com/983/thumb-1920-983959.jpg);
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
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
                <li class="nav-item active">
                    <a class="nav-link" href="indexManajemen">Manajemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexPemain">Pemain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexSponsor">Sponsor</a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="<?= base_url('Arsenal/simpanManajemen') ?>" method="POST" enctype="multipart/form-data" style="width: 20cm;">
        <div class="form-group mb-2">
            <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">ID</label>
            <input name="id_manajemen" class="form-control <?= ($validation->hasError('id_manajemen')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Masukkan ID" value="<?= old('id_manajemen') ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
                <?= $validation->getError('id_manajemen'); ?>
            </div>
        </div>

        <div class="form-group mb-2">
            <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">Nama</label>
            <input name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Masukkan Nama" value="<?= old('nama') ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
                <?= $validation->getError('nama'); ?>
            </div>
        </div>

        <div class="form-group mb-2">
            <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">Jabatan</label>
            <input name="jabatan" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Masukkan Jabatan" value="<?= old('jabatan') ?>">
            <div id="validationServer03Feedback" class="invalid-feedback text-wrap">
                <?= $validation->getError('jabatan'); ?>
            </div>
        </div>

        <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">Negara</label>
        <div class="input-group mb-2">
            <select class="custom-select <?= ($validation->hasError('id_negara')) ? 'is-invalid' : ''; ?>" name="id_negara">
                <option selected>Silahkan Pilih</option>
                <?php
                foreach ($negara as $row) {
                ?>
                    <option value="<?= $row['id_negara'] ?>"> <?= $row['nama_negara'] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback"><?= $validation->getError('id_negara'); ?></div>
        </div>

        <label class="badge badge-light text-wrap" style="font-size: 15px; font-weight: bold; color: #8B0000;">Upload Foto</label>
        <div class="custom-file mb-2">
            <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?> inline" id="foto" name="foto" value="<?= old('foto'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('foto'); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-danger">Kirim</button>
        <a href="indexManajemen" class="btn btn-warning" role="button">Batal</a>
    </form>
</body>

</html>