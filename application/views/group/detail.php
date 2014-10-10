<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - group info</title>
</head>
<body>
    <h1>Users in group <?= $group ?></h1>
    <?php foreach($agents as $agent): ?>
        <?= $agent->email ?>
    <?php endforeach; ?>
</body>
</html>