<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - group info</title>
</head>
<body>
    <?php foreach($agents as $agent): ?>
        <?= $agent->email ?>
    <?php endforeach; ?>
</body>
</html>