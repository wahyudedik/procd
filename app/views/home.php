<!-- app/views/home.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <h1>Welcome to My Framework</h1>

    <h2>Users:</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?php echo $user['name']; ?></li>
        <?php endforeach; ?>
    </ul>

    <script src="../public/js/main.js"></script>
</body>

</html>