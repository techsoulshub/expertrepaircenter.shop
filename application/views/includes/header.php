<!-- Top Header -->
<div class="bg-new py-3">
    <div class="container text-center">
        <a href="<?= base_url() ?>">
            <h1 class="text-white mb-0"><?= $headtitle ?></h1>
        </a>
    </div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light back-1 sticky-top">
    <div class="container">
        <!-- Left Contact Button -->
        <a class="btn btn-default cs-my-btn colourer-1 mr-3"
            href="tel:<?= PLATFORMCONTACT ?>">
            <?= PLATFORMCONTACT ?>
        </a>
        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#mainNavbar" aria-controls="mainNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about-us">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>air-conditioner">Air Conditioner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>refrigerator">Refrigerator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>microwave-oven">Microwave Oven</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>washing-machine">Washing Machine</a>
                </li>
            </ul>
        </div>
    </div>
</nav>