<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pengguna</title>
</head>

<body>
    <h1>Tambah Pengguna</h1>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div>
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <form action="<?= route_to('user.store') ?>" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>

        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" required>
        <br>

        <label for="phone">Telepon:</label>
        <input type="text" name="phone" id="phone" required>
        <br>

        <label for="role">Peran:</label>
        <input type="text" name="role" id="role" required>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>