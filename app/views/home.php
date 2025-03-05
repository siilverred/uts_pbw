home.php

<!DOCTYPE html>
<html>

<head>
    <title>Home - Tabungan Mahasiswa</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <nav>
        <h1>Tabungan Mahasiswa</h1>
        <?php if (isset($_SESSION['user_id'])): ?> 
            <div>
                Welcome, <?php echo $_SESSION['user_name']; ?> 
                <a href="home">Home</a>
                <?php if ($_SESSION['user_role'] === 'admin'): ?> 
                    <a href="admin">Admin Dashboard</a>
                <?php endif; ?>
                <a href="save">Save</a>
                <a href="logout">Logout</a>
            </div>
        <?php else: ?> 
            <div>
                <a href="login">Login</a>
                <a href="register">Register</a>
            </div>
        <?php endif; ?>
    </nav>

    <main>
        <h2>Tabungan Mahasiswa</h2>
        <?php foreach ($donations as $donation): ?> 
            <div class="donation-card">
                <h3><?php echo htmlspecialchars($donation['name']); ?></h3> 
                <p>Amount: Rp<?php echo number_format($donation['amount']); ?></p> 
                <p>Message: <?php echo htmlspecialchars($donation['message']); ?></p>
                <small>Date: <?php echo $donation['created_at']; ?></small>
            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>