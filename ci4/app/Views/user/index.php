<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css') ?>">
</head>
<body>
    <div id="wrapper">
        <h1><?= $title ?></h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['useremail'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('/user/login') ?>">Login</a> | 
        <a href="<?= base_url('/admin/article') ?>">Admin Area</a>
        <a href="<?= base_url('/user/logout') ?>" onclick="return confirm('Yakin ingin logout?')">Logout</a>
    </div>
</body>
</html>