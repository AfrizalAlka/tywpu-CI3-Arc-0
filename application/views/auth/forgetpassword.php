<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="forgot-password-container">
        <h2>Lupa Password</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?= $success; ?></div>
        <?php endif; ?>
        <form action="<?= base_url('auth/forgotpassword'); ?>" method="post">
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Link Reset</button>
        </form>
        <p>
            <a href="<?= base_url('auth/login'); ?>">Kembali ke Login</a>
        </p>
    </div>
</body>
</html>