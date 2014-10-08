<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - groups list</title>
</head>
<body>
    <?php foreach($groups as $group): ?>
        <?= $group->name ?>
    <?php endforeach; ?>
</body>
</html>