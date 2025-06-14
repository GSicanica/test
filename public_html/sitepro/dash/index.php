<?php
session_start();

const DASH_PASS = 'password'; // Ovdje promijenite lozinku

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Handle login submission
if (isset($_POST['password'])) {
    if ($_POST['password'] === DASH_PASS) {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Neispravna lozinka.';
    }
}

$loggedIn = !empty($_SESSION['logged_in']);
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Moj Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
<?php if (!$loggedIn): ?>
    <h1 class="mb-3">Prijava</h1>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form method="post" class="card card-body shadow-sm" style="max-width: 400px; margin: auto;">
        <div class="mb-3">
            <label for="password" class="form-label">Lozinka</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Prijavi se</button>
    </form>
<?php else: ?>
    <a href="?logout=1" class="btn btn-secondary float-end">Odjava</a>
    <h1>Dobrodošao na dashboard!</h1>
    <div class="card shadow-sm p-3 mb-3">
        <p>Ovdje možeš dodati sadržaj svog dashboarda (grafove, tablice, linkove itd).</p>
        <p><small class="text-muted">Trenutno vrijeme: <?php echo date('d.m.Y H:i'); ?></small></p>
    </div>
<?php endif; ?>
</div>
</body>
</html>
