<style>
    .navbar {
        background-color: #003600;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
        color: #ffffff;
    }

    .navbar-brand:hover,
    .navbar-nav .nav-link:hover {
        color: #dddddd;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">TicketyBus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to('bus.index') ?>">Daftar Bus</a>
                </li>
                <!-- Only show this link if the user is admin -->
                <?php if (session()->get('role') === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route_to('bus.create') ?>">Tambah Bus</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= route_to('booking') ?>">Booking Tiket</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if (session()->get('name')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route_to('user.profile') ?>"><?= session()->get('name') ?></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route_to('user.login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route_to('user.create') ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
