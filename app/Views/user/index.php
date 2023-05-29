<!DOCTYPE html>
<html lang="">
<head>
    <title>Daftar Pengguna</title>
</head>
<body>
<h1>Daftar Pengguna</h1>

<?php if (session()->getFlashdata('message')) : ?>
    <div><?= session()->getFlashdata('message') ?></div>
<?php endif ?>

<table>
    <thead>
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
                <a href="<?= route_to('user.edit', $user['id']) ?>">Edit</a>
                <a href="<?= route_to('user.delete', $user['id']) ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<a href="<?= route_to('user.create') ?>">Tambah Pengguna</a>
</body>
</html>
