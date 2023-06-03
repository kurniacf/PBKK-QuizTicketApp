<div class="container-fluid mt-3">
    <h1 class="mb-4">Daftar Bus yang Tersedia</h1>

    <!-- Tombol Tambah Bus -->
    <?php if (session()->get('role') === 'admin') : ?>
        <a href="<?= route_to('bus.create') ?>" class="btn btn-primary mb-3">Tambah Bus</a>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif ?>

    <table class="table table-bordered table-hover mt-2">
        <thead class="thead-light">
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
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <?php if (session()->get('role') === 'user') : ?>
                            <a href="<?= route_to('bus.book', $bus['id']) ?>" class="btn btn-sm btn-primary mr-2">Pesan</a>
                        <?php endif; ?>
                        <?php if (session()->get('role') === 'admin') : ?>
                            <a href="<?= route_to('bus.edit', $bus['id']) ?>" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <a href="<?= route_to('bus.delete', $bus['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
