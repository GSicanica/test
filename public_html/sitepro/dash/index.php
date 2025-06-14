<?php
// Simple session-based login
session_start();

const DASH_PASS = 'password'; // Change this password

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
$view = $_GET['view'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Moj Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
<?php if (!$loggedIn): ?>
    <h1 class="mb-3">Prijava</h1>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post" class="card card-body shadow-sm" style="max-width: 400px;">
        <div class="mb-3">
            <label for="password" class="form-label">Lozinka</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Prijavi se</button>
    </form>
<?php else: ?>
    <a href="?logout=1" class="btn btn-secondary float-end">Odjava</a>
    <h1 class="mb-4">Dobrodošao na dashboard!</h1>

    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link <?php echo $view==='home' ? 'active' : ''; ?>" href="?">Početna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $view==='forms' ? 'active' : ''; ?>" href="?view=forms">Upiti</a>
        </li>
    </ul>

    <?php if ($view === 'forms'): ?>
        <?php
        $logFile = __DIR__ . '/../src/forms/forms.log';
        $entries = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
        ?>
        <?php if (!$entries): ?>
            <p>Nema zabilježenih upita.</p>
        <?php else: ?>
            <div class="table-responsive">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Datum</th>
                        <?php foreach ($entries[0]['fields'] as $f): ?>
                            <th><?php echo htmlspecialchars($f['name']); ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entries as $e): ?>
                        <tr>
                            <td><?php echo $e['id']; ?></td>
                            <td><?php echo htmlspecialchars($e['createdAt']); ?></td>
                            <?php foreach ($e['fields'] as $f): ?>
                                <td><?php echo htmlspecialchars($f['answer']); ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="card shadow-sm p-3">
            <p>Ovdje možeš dodati sadržaj svog dashboarda (grafove, tablice, linkove itd).</p>
        </div>
    <?php endif; ?>
<?php endif; ?>
</div>
</body>
</html>
