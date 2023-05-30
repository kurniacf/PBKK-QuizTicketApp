<div class="container-fluid mt-3">
    <h1 class="mb-4">Daftar Pengguna</h1>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-info"><?= session()->getFlashdata('message') ?></div>
    <?php endif ?>

    <table class="table table-bordered table-hover mt-2">
        <thead class="thead-light">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Peran</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['address'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['role'] ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example"> <!-- Wrap buttons with div -->
                        <a href="<?= route_to('user.edit', $user['id']) ?>" class="btn btn-sm btn-primary mr-2">Edit</a> <!-- Add margin right -->
                        <a href="<?= route_to('user.delete', $user['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
