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
                Register
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <form action="<?= route_to('user.store') ?>" method="POST">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id=" name" required placeholder="Masukkan Nama...">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="email" name="email" class="form-control" id="email" required placeholder="Masukkan E-Mail...">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required placeholder="Masukkan Password...">
                        </div>
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" required placeholder="Masukkan Alamat...">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Telepon</label>
                            <input type="text" name="phone" class="form-control" id="phone" required placeholder="Masukkan Nomor Telepon...">
                        </div>
                        <div class="mb-3">
                            <label for="role">Peran</label>
                            <input type="text" name="role" class="form-control" id="role" required placeholder="Masukkan Role Anda (user/admin)...">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>