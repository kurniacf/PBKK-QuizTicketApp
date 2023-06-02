<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 5rem;
            background: linear-gradient(to right, #1c92d2, #f2fcfe);
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
        .form-group label {
            text-align: left;
            display: block;
            font-weight: bold;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .card .card-body {
            background-color: #ffffff;
        }
        .btn-back {
            margin-right: 10px;
        }
    </style>
</head>

<body>

<?= $this->include('partials/navbar') ?>

<div class="container starter-template">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="mb-3">Edit Profile</h1>
            <div class="card">
                <div class="card-body">
                    <form id="userForm" action="<?= route_to('user.update', $user['id']) ?>" method="post" novalidate>
                        <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $user['name'] ?>" required>
                            <div class="invalid-feedback">
                                Please enter a name.
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div class="invalid-feedback">
                                Please enter a password.
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?= $user['address'] ?>" required>
                            <div class="invalid-feedback">
                                Please enter an address.
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?= $user['phone'] ?>" required>
                            <div class="invalid-feedback">
                                Please enter a phone number.
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="role">Role:</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="user" <?= ($user['role'] == 'user') ? 'selected' : '' ?>>User</option>
                                <option value="admin" <?= ($user['role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a role.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                        <a href="<?= route_to('user.index') ?>" class="btn btn-secondary btn-back">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    (function () {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</body>
</html>
