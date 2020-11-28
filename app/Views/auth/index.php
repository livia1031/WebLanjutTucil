<?= $this->extend('templates/header'); ?>

<?= $this->section('header'); ?>

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

    <?= $this->endSection(); ?>