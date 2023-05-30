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

        .footer {
            background-color: #003600;
            color: #ffffff;
            padding: 20px 0;
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

<?= $this->include('partials/navbar') ?>

<div class="jumbotron">
    <div class="container">
        <div class="card text-white" style="opacity: 0.8; background-color: #212529; border: 2px solid white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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
    <section class="mt-4" style="background-color: #f9f9f9; padding: 20px; border-radius: 15px;">
        <h2>About TicketyBus</h2>
        <p>We are committed to providing you the best experience in online bus ticket booking. With our vast selection of bus routes and schedules, there's always a bus ready for your journey.</p>
    </section>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/3829175/pexels-photo-3829175.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to TicketyBus</h5>
                    <p>Experience the easiest and fastest online bus ticket booking service.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3608967/pexels-photo-3608967.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>New Adventure with TicketyBus</h5>
                    <p>Explore the area of your dreams with the comfort of us</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/385997/pexels-photo-385997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Always prioritize safety</h5>
                    <p>You are our treasure and we will take good care of you.</p>
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
</div>

<footer class="footer mt-4" style="position: relative;">
    <div class="container text-center">
        <p>&copy; 2023 KurniaCF & Rere Arga</p>
        <p>Surabaya, Indonesia</p>
        <a href="https://github.com/kurniacf/PBKK-QuizTicketApp" target="_blank">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="Github" style="height: 30px; width: 30px;">
        </a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>