<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?= $this->include('partials/navbar') ?>

<div class="container mt-5">
    <h2>Admin Dashboard</h2>

    <div class="row mt-3">
        <div class="col-md-3">
            <div class="list-group">
                <a href="<?= route_to('user.index') ?>" class="list-group-item list-group-item-action">Users</a>
                <a href="<?= route_to('bus.index') ?>" class="list-group-item list-group-item-action">Buses</a>
                <a href="<?= route_to('route.index') ?>" class="list-group-item list-group-item-action">Routes</a>
                <a href="<?= route_to('booking.index') ?>" class="list-group-item list-group-item-action">Bookings</a>
            </div>
        </div>

        <div class="col-md-9">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['role'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

</body>
</html>
