<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container mt-5 col-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tambahkan Rute Bis
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <form action="<?= route_to('routes.store') ?>" method="POST">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="dari" class="form-label">Dari</label>
                            <input type="text" name="start_location" class="form-control" id=" start_location" required placeholder="Masukkan Tempat Awal...">
                        </div>
                        <div class="mb-3">
                            <label for="tujuan" class="form-label">Tujuan</label>
                            <input type="text" name="end_location" class="form-control" id="end_location" required placeholder="Masukkan Tujuan...">
                        </div>
                        <div class="mb-3">
                            <label for="distance">Distance</label>
                            <input type="text" name="distance" class="form-control" id="distance" required placeholder="Masukkan Jarak...">
                        </div>
                        <div class="mb-3">
                            <label for="travel_time">Waktu</label>
                            <input type="text" name="travel_time" class="form-control" id="travel_time" required placeholder="Masukkan Durasi Perjalanan...">
                        </div>
                        <div class="mb-3">
                            <label for="fare">fare</label>
                            <input type="text" name="fare" class="form-control" id="fare" required placeholder="Masukkan Tarif Biaya...">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('partials/footer') ?>
</body>

</html>