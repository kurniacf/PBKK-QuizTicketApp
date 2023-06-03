<div class="container-fluid mt-3">
    <h1 class="mb-4">Daftar Pemesanan</h1>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif ?>

    <table class="table table-bordered table-hover mt-2">
        <thead class="thead-light">
        <tr>
            <th>ID Pemesanan</th>
            <th>ID User</th>
            <th>ID Bus</th>
            <th>Nomor Kursi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($bookings as $booking) : ?>
            <tr>
                <td><?= $booking['id'] ?></td>
                <td><?= $booking['user_id'] ?></td>
                <td><?= $booking['bus_id'] ?></td>
                <td><?= $booking['seat_number'] ?></td>
                <td><?= $booking['status'] ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <?php if (session()->get('role') === 'admin') : ?>
                            <a href="<?= route_to('booking.edit', $booking['id']) ?>" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <a href="<?= route_to('booking.delete', $booking['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
