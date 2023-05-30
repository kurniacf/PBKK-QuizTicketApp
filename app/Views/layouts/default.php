<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketyBus Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles... -->
</head>
<body>
<!-- Navbar... -->
<?= $this->include('partials/navbar') ?>

<?= $this->renderSection('content') ?>

<!-- Footer... -->
<?= $this->include('partials/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
