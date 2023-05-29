<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketyBus Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }

        .navbar {
            background-color: #003600;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #dddddd;
        }

        .footer {
            background-color: #003600;
            color: #ffffff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
        }

        .jumbotron {
            background: url('https://images.pexels.com/photos/2402648/pexels-photo-2402648.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .jumbotron h1,
        .jumbotron p {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
        }

        .carousel-item {
            height: 600px;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">TicketyBus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to('bus.index') ?>">Daftar Bus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to('bus.create') ?>">Tambah Bus</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <div class="card text-white bg-dark" style="opacity: 0.7;">
            <div class="card-body">
                <h1 class="card-title display-4">Selamat Datang di TicketyBus</h1>
                <p class="card-text lead">Pemesanan tiket bus menjadi lebih mudah dan cepat.</p>
                <hr class="my-4">
                <p>Daftarkan diri anda sekarang juga dan nikmati kemudahan dalam perjalanan.</p>
                <a href="<?= route_to('register') ?>" class="btn btn-primary btn-lg">Register Sekarang</a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/3829175/pexels-photo-3829175.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3608967/pexels-photo-3608967.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/385997/pexels-photo-385997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third Slide</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="mt-4">
        <h2>Tautan Referensi</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?= route_to('login') ?>">Login</a></li>
            <li class="list-group-item"><a href="<?= route_to('register') ?>">Register</a></li>
            <li class="list-group-item"><a href="<?= route_to('bus.index') ?>">Daftar Bus</a></li>
            <li class="list-group-item"><a href="<?= route_to('booking') ?>">Booking Tiket</a></li>
        </ul>
    </section>
</div>

<footer class="footer mt-4">
    <div class="container text-center">
        <p>&copy; 2023 KurniaCF & Rere Arga</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
