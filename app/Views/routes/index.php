<!DOCTYPE html>
<html lang="">

<head>
    <title>Rute Perjalanan Bis</title>
</head>

<body>
    <h1>Daftar Rute Perjalanan Bis</h1>

    <?php if (session()->getFlashdata('message')) : ?>
        <div><?= session()->getFlashdata('message') ?></div>
    <?php endif ?>

    <table>
        <thead>
            <tr>
                <th>Dari</th>
                <th>Tujuan</th>
                <th>Jarak</th>
                <th>Waktu</th>
                <th>Tarif</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($routes as $route) : ?>
                <tr>
                    <td><?= $route['start_location'] ?></td>
                    <td><?= $route['end_location'] ?></td>
                    <td><?= $route['distance'] ?></td>
                    <td><?= $route['travel_time'] ?></td>
                    <td><?= $route['fare'] ?></td>
                    <td>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <a href="<?= route_to('routes.create') ?>">Tambahkan Rute Bis</a>

</html>