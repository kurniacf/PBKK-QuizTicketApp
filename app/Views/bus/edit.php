<!DOCTYPE html>
<html>

<head>
    <title>Edit Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
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
        <div class="mb-3">
            <label for="bus_name" class="form-label">Nama Bus</label>
            <input type="text" name="bus_name" id="bus_name" class="form-control" value="<?= $bus['bus_name'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="bus_type" class="form-label">Tipe Bus</label>
            <select name="bus_type" id="bus_type" class="form-select" required>
                <option value="small" <?= ($bus['bus_type'] === 'small') ? 'selected' : '' ?>>Small</option>
                <option value="medium" <?= ($bus['bus_type'] === 'medium') ? 'selected' : '' ?>>Medium</option>
                <option value="large" <?= ($bus['bus_type'] === 'large') ? 'selected' : '' ?>>Large</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="total_seats" class="form-label">Jumlah Kursi</label>
            <input type="number" name="total_seats" id="total_seats" class="form-control" value="<?= $bus['total_seats'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" required value="<?= $bus['price'] ?>">
        </div>

        <div class="mb-3">
            <label for="departure_location" class="form-label">Lokasi Keberangkatan</label>
            <input type="text" name="departure_location" id="departure_location" class="form-control" required value="<?= $bus['departure_location'] ?>">
        </div>

        <div class="mb-3">
            <label for="arrival_location" class="form-label">Lokasi Kedatangan</label>
            <input type="text" name="arrival_location" id="arrival_location" class="form-control" value="<?= $bus['arrival_location'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="departure_time" class="form-label">Tanggal dan Waktu Keberangkatan</label>
            <br>
            <input type="datetime-local" id="departure_time" name="departure_time" value="<?= $bus['departure_time'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="arrival_time" class="form-label">Tanggal dan Waktu Kedatangan</label>
            <br>
            <input type="datetime-local" id="arrival_time" name="arrival_time" value="<?= $bus['arrival_time'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="distance" class="form-label">Jarak</label>
            <input type="number" name="distance" id="distance" class="form-control" value="<?= $bus['distance'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>

</html>