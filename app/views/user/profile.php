<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks List</title>
</head>
<body>
<h1>Tasks List</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <h3><?php echo htmlspecialchars($user['login']); ?></h3>
            <p><?php echo htmlspecialchars($user['web']); ?></p>

        </li>
    <?php endforeach; ?>
</ul>
<a href="index.php?action=add">Add New Task</a>
</body>
</html>
