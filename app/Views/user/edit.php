<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?= $this->include('partials/navbar') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Edit Profile</h2>
                </div>
                <div class="card-body">
                    <form action="<?= route_to('user.update', $user['id']) ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $user['name'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?= $user['address'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?= $user['phone'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="role">Role:</label>
                            <input type="text" class="form-control" name="role" id="role" value="<?= $user['role'] ?>" required>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Update Profile">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>