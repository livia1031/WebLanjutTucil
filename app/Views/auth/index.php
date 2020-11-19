<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>TUCIL</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Pemrograman Web Lanjut</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/index'); ?>">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/about'); ?>">About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/admin'); ?>">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <img src="/img/lirid1.png" width="250px">
                <h1 class="display-4 font-weight-bold">Liridkan Dessert</h1>
                <p class="lead font-weight-bold">Dessert ku, semanis kamu</p>
            </div>
        </div>
    </nav>
    <nav>
        <div class="card-group">
            <div class="card">
                <img src="/img/lirid2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Isi nya apa aja?</h5>
                    <p class="card-text">Lapisan isian dessert kita kak bisa dilirik👀 cake brownies yg lembut dipadukan dengan cream milk cheese dan chocolate ganache yummyyy</p>
                </div>
            </div>

            <div class="card">
                <img src="/img/lirid3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rasanya?</h5>
                    <p class="card-text">Rasanya pasti lembut, lezat dan tidak mudah enek</p>
                </div>
            </div>

            <div class="card">
                <img src="/img/lirid4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Yukk cus cobainn!!!</h5>
                    <p class="card-text">Chocobrow Delight hanya 25k aja!! Sebanyak, setebal, selembut, dan senikmat itu murah banget kan Yuk jangan sampe ketinggalan</p>
                </div>
            </div>
    </nav>
    <nav>
        <div class="container text-center">
            <a href="https://www.instagram.com/liridkan.dessert/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Contact</a>
    </nav>

</body>

</html>