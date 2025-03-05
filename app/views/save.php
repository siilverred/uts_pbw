<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>save.php

<!DOCTYPE html>
<html>

<head>
    <title>Save - Tabungan</title>
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
        <h2>Simpan Tabungan</h2>
        <form method="POST" action="save">
            <div>
                <label>Total (Rp)</label>
                <input type="number" name="amount" required>
            </div>
            <div>
                <label>Pesan</label>
                <textarea name="message" required></textarea>
            </div>
            <button type="submit">Save</button>
        </form>
    </main>
</body>

</html>