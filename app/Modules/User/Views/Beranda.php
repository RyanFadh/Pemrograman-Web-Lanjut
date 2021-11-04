<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Beranda - Arsenal</title>

    <link rel="icon" href="https://icons.iconarchive.com/icons/giannis-zographos/english-football-club/24/Arsenal-FC-icon.png">

    <style>
        body {
            background-image: url(https://images5.alphacoders.com/983/thumb-1920-983959.jpg);
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

        .card {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            width: 380px;
            border: none;
            border-radius: 15px;
            padding: 8px;
            background-color: #fff;
            position: relative;
            height: 380px;
        }

        .upper {
            height: 100px
        }

        .upper img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            opacity: 0.1;
        }

        .user {
            position: relative
        }

        .profile img {
            height: 80px;
            width: 80px;
            margin-top: 2px
        }

        .profile {
            position: absolute;
            top: -50px;
            left: 38%;
            height: 90px;
            width: 90px;
            border: 3px solid #fff;
            border-radius: 50%
        }

        .follow {
            border-radius: 15px;
            padding-left: 20px;
            padding-right: 20px;
            height: 35px
        }

        .stats span {
            font-size: 29px
        }

        h4 {
            font-weight: bold;
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
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('UserControl') ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('UserControl/indexManajemen') ?>">Manajemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('UserControl/indexPemain') ?>">Pemain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('UserControl/indexSponsor') ?>">Sponsor</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="https://www.arsenal.com/" class="button"><button type="button" class="btn btn-outline-light mr-sm-2" style="font-weight: bold; color: white;">Arsenal.com</button></a>
                <a href="<?= base_url('Login/logout') ?>"><button type="button" class="btn btn-light mr-sm-2" style="font-weight: bold; color: red;">Logout</button></a>
            </form>
        </div>
    </nav>

    
    <div class="container d-flex justify-content-center" style="margin-top: 100px;">
        <div class="card">    
            <div class="upper"> <img src='https://play-lh.googleusercontent.com/JZLQjEK7vKSzJ9PX1kVqgWOT0-FrUiWSQmsQl9XtmShNyxDDLtOHCInWtnXLDA19T1c' class="img-fluid"> </div>
            <div class="user text-center">
                <div class="profile"> <img src="https://lh3.googleusercontent.com/vvOsuKmg8d5KxpWowFkV7j3xRrKGbqxte1OmyeOJlrbk8NyS4pbJTzs46W5pjk4Cbw" class="rounded-circle" width="80"> </div>
            </div>
            <div class="mt-5 text-center">
                <h4 class="mb-0">Arsenal Football Club</h4> <span class="text-muted d-block mb-2">Inggris</span> <button class="btn btn-danger btn-sm follow">Victoria Concordia Crescit</button>
                <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                    <div class="stats">
                        <h6 class="mb-0">Asal</h6> <span>London</span>
                    </div>
                    <div class="stats">
                        <h6 class="mb-0">Sejak</h6> <span>1886</span>
                    </div>
                    <div class="stats">
                        <h6 class="mb-0">Juara Liga</h6> <span>13</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>