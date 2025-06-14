<?php
// Start or resume the session
session_start();

// Handle logout request and destroy the session
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

// Redirect unauthenticated users to the login page
if (empty($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

// At this point the user is logged in
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Moj Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-4">
        <a href="?logout=1" class="btn btn-link float-end">Odjava</a>
        <h1 class="mb-4">Dobrodošao na dashboard!</h1>
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">Ovdje možeš dodati sadržaj svog dashboarda (grafove, tablice, linkove itd).</p>
                <p class="card-text"><small class="text-muted">Trenutno vrijeme: <?php echo date('d.m.Y H:i'); ?></small></p>
            </div>
        </div>
    </div>
</body>
</html>
