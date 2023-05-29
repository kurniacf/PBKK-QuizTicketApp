<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Tambahkan CSS atau style yang diperlukan -->
</head>
<body>
<header>
    <!-- Tambahkan header sesuai kebutuhan -->
</header>

<main>
    <section>
        <h1>Selamat Datang di Aplikasi Pemesanan Tiket Online</h1>
        <!-- Tambahkan informasi umum tentang aplikasi -->
    </section>

    <section>
        <h2>Tautan Referensi</h2>
        <ul>
            <li><a href="<?= route_to('login') ?>">Login</a></li>
            <li><a href="<?= route_to('register') ?>">Register</a></li>
            <li><a href="<?= route_to('bus.index') ?>">Daftar Bus</a></li>
            <li><a href="<?= route_to('booking') ?>">Booking Tiket</a></li>
            <!-- Tambahkan tautan referensi lainnya -->
        </ul>
    </section>
</main>

<footer>
    <!-- Tambahkan footer sesuai kebutuhan -->
</footer>

<!-- Tambahkan script atau JavaScript yang diperlukan -->
</body>
</html>
