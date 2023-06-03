<!DOCTYPE html>
<html lang="">

<head>
    <title>Daftar Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
<?= $this->include('partials/navbar') ?>

<div class="container">
    <h1 class="text-center">Daftar Bus</h1>

    <div class="mt-5">
        <table class="table">
            <thead>
            <tr>
                <th>Nama Bus</th>
                <th>Tipe Bus</th>
                <th>Lokasi Keberangkatan</th>
                <th>Lokasi Tujuan</th>
                <th>Waktu Keberangkatan</th>
                <th>Waktu Tiba</th>
                <th>Harga</th>
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
                        <?php if ($bus['total_seats'] > $bus['booked_seats']) : ?>
                            <a href="<?= route_to('booking.create', $bus['id']) ?>" class="btn btn-primary">Book</a>
                        <?php else : ?>
                            <button class="btn btn-primary" disabled>Book</button>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->include('partials/footer') ?>
</body>

</html>
