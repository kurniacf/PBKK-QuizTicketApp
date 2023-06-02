<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Bus - TicketyBus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .list-header {
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: #003600; /* dark color for header */
            color: #fff;
        }

        .list-header h1 {
            font-weight: 700;
        }

        .table-responsive {
            margin-top: 20px;
        }

        table {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #007bff; /* light color for table head */
            color: #fff;
        }

        th, td {
            padding: 15px;
            border: none;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<?= $this->include('partials/navbar') ?>

<div class="list-header text-center">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Daftar Bus yang Tersedia</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" data-aos="fade-in"><?= session()->getFlashdata('message') ?></div>
    <?php endif ?>

    <div class="table-responsive" data-aos="fade-up">
        <table class="table table-hover">
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
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('partials/footer') ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>
