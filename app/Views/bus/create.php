<!DOCTYPE html>
<html>

<head>
    <title>Tambah Bus</title>
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

    <div class="container">
        <h1>Tambah Bus</h1>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger mt-3">
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <div class="form-container">
            <form action="<?= route_to('bus.store') ?>" method="post">
                <div class="mb-3">
                    <label for="bus_name" class="form-label">Nama Bus:</label>
                    <input type="text" name="bus_name" id="bus_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="bus_type" class="form-label">Tipe Bus:</label>
                    <select name="bus_type" id="bus_type" class="form-select" required>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="total_seats" class="form-label">Jumlah Kursi:</label>
                    <input type="number" name="total_seats" id="total_seats" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</body>

</html>