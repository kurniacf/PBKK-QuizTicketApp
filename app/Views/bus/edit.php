<!DOCTYPE html>
<html>
<head>
    <title>Edit Bus</title>
</head>
<body>
<h1>Edit Bus</h1>

<?php if (session()->getFlashdata('errors')) : ?>
    <div>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <p><?= $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>

<form action="<?= route_to('bus.update', $bus['id']) ?>" method="post">
    <label for="bus_name">Nama Bus:</label>
    <input type="text" name="bus_name" id="bus_name" value="<?= $bus['bus_name'] ?>" required>
    <br>

    <label for="bus_type">Tipe Bus:</label>
    <input type="text" name="bus_type" id="bus_type" value="<?= $bus['bus_type'] ?>" required>
    <br>

    <label for="total_seats">Jumlah Kursi:</label>
    <input type="number" name="total_seats" id="total_seats" value="<?= $bus['total_seats'] ?>" required>
    <br>

    <input type="submit" value="Simpan">
</form>
</body>
</html>
