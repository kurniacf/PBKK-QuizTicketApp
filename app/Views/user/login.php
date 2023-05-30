<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background: #f8f9fa;
        }

        .card {
            transition: transform .2s;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?= $this->include('partials/navbar') ?>

    <div class="container mt-5 col-5">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <?php if (session()->getFlashdata('error')) { ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php } ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" required placeholder="Masukkan Email...">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="password" required placeholder="Masukkan password...">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="login" value="Login" class="btn btn-primary">
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