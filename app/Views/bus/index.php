<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Bus</title>
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
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

    <div class="container mt-4">
        <h1 class="mb-4">Daftar Bus yang Tersedia</h1>

        <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Bus</th>
                    <th>Tipe Bus</th>
                    <th>Jumlah Kursi</th>
                    <th>Harga</th>
                    <th>Lokasi Awal</th>
                    <th>Lokasi Tujuan</th>
                    <th>Waktu Berangkat</th>
                    <th>Waktu Tiba</th>
                    <th>Jarak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buses as $bus) : ?>
                    <tr>
                        <td><?= $bus['bus_name'] ?></td>
                        <td><?= $bus['bus_type'] ?></td>
                        <td><?= $bus['total_seats'] ?></td>
                        <td><?= $bus['price'] ?></td>
                        <td><?= $bus['departure_location'] ?></td>
                        <td><?= $bus['arrival_location'] ?></td>
                        <td><?= $bus['departure_time'] ?></td>
                        <td><?= $bus['arrival_time'] ?></td>
                        <td><?= $bus['distance'] ?></td>
                        <td>
                            <?php if (session()->get('role') === 'user') : ?>
                                <a href="<?= route_to('bus.book', $bus['id']) ?>" class="btn btn-primary">Pesan</a>
                            <?php endif; ?>
                            <?php if (session()->get('role') === 'admin') : ?>
                                <a href="<?= route_to('bus.edit', $bus['id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= route_to('bus.delete', $bus['id']) ?>" class="btn btn-danger">Hapus</a>
                            <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <footer class="footer mt-4">
        <div class="container text-center">
            <p>&copy; 2023 KurniaCF & Rere Arga</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            var footer = document.querySelector('.footer');
            var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollPosition > 0) {
                navbar.classList.add('fixed-top');
                footer.style.position = 'relative';
            } else {
                navbar.classList.remove('fixed-top');
                footer.style.position = 'absolute';
            }
        });
    </script>
</body>

</html>