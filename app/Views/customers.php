<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>
    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $customer['name'] ?></td>
            <td><?= $customer['email'] ?></td>
            <td><?= $customer['phone'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <nav>
    <a href="<?= site_url('/') ?>">Home</a> |
    <a href="<?= site_url('about') ?>">About</a> |
    <a href="<?= site_url('customers') ?>">Customers</a> |
    <a href="<?= site_url('users') ?>">Users</a>
</nav>
</body>
</html>