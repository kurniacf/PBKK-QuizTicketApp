<!DOCTYPE html>
<html>

<head>
    <title>Edit Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            animation: slideInUp 1s;
        }

        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?= $this->include('partials/navbar') ?>

    <div class="container">
        <h1 class="text-center">Edit Bus</h1>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger mt-3">
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <div class="form-container mx-auto" style="max-width: 500px;">
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

                <a href="<?= route_to('user.dashboard') ?>" class="btn btn-secondary mr-2">Back</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <?= $this->include('partials/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>