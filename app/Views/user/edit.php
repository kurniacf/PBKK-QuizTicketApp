<!DOCTYPE html>
<html lang="">

<head>
    <title>Edit Pengguna</title>
</head>

<body>
    <h1>Edit Pengguna</h1>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div>
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <form action="<?= route_to('user.update', $user['id']) ?>" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="<?= $user['name'] ?>" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>

        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" value="<?= $user['address'] ?>" required>
        <br>

        <label for="phone">Telepon:</label>
        <input type="text" name="phone" id="phone" value="<?= $user['phone'] ?>" required>
        <br>

        <label for="role">Peran:</label>
        <input type="text" name="role" id="role" value="<?= $user['role'] ?>" required>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>