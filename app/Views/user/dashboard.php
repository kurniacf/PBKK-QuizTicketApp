<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".list-group-item-action").click(function(e) {
                e.preventDefault();
                const link = $(this).attr("href");
                fetchContent(link);
            });

            function fetchContent(link) {
                $.ajax({
                    url: link,
                    method: "GET",
                    success: function(data) {
                        $("#content").html(data);
                    },
                    error: function(error) {
                        console.log(error);
                    },
                });
            }

            // Load first content when page is loaded
            fetchContent('<?= route_to('user.index') ?>');
        });
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            background-color: #f8f9fa;
            height: 100vh;
            padding-top: 20px;
        }
        .list-group-item-action:hover {
            background-color: #e9ecef;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
        .dashboard-title {
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 1em;
            margin-top: 30px;
        }
        .table {
            width: 100%;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>

<?= $this->include('partials/navbar') ?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-3 sidebar">
            <h3 class="text-center">Admin Panel</h3>
            <div class="list-group mt-4">
                <a href="<?= route_to('user.index') ?>" class="list-group-item list-group-item-action">Users</a>
                <a href="<?= route_to('bus.index') ?>" class="list-group-item list-group-item-action">Buses</a>
                <a href="<?= route_to('route.index') ?>" class="list-group-item list-group-item-action">Routes</a>
                <a href="<?= route_to('booking.index') ?>" class="list-group-item list-group-item-action">Bookings</a>
            </div>
        </div>
        <div class="col-md-9">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <div id="content">
                <!-- AJAX Content will be loaded here -->
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

</body>
</html>
