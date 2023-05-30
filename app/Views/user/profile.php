<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom CSS here */
        .profile-header {
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<?= $this->include('partials/navbar') ?>

<div class="profile-header text-center">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="avatar">
                    <img src="https://via.placeholder.com/150" class="rounded-circle" alt="Avatar">
                </div>
                <h2 class="display-4"><?= $user['name'] ?></h2>
                <p class="lead"><?= $user['role'] ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong> <?= $user['email'] ?></p>
                    <p><strong>Phone:</strong> <?= $user['phone'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Address</h3>
                </div>
                <div class="card-body">
                    <p><?= $user['address'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

</body>
</html>
