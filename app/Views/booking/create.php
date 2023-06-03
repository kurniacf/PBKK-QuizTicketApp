<!DOCTYPE html>
<html>

<head>
    <title>Buat Pemesanan</title>
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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h2 class="text-center mb-4">Buat Pemesanan</h2>

                    <?= $this->include('partials/flash_messages') ?>
                    <form action="<?= route_to('booking.store') ?>" method="post">
                        <input type="hidden" name="bus_id" value="<?= $bus_id ?>">
                        <div class="form-group mb-3">
                            <label for="seat_number">Nomor Kursi</label>
                            <input type="number" name="seat_number" id="seat_number" class="form-control" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= route_to('bus.index') ?>" class="btn btn-secondary back-button">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('partials/footer') ?>
</body>

</html>
