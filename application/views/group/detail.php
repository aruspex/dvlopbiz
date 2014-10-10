<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - group info</title>
</head>
<body>
    <h1>Agents in group <?= $group ?></h1>
    <ul>
        <?php foreach($agents as $agent): ?>
            <li>
                <?= $agent->email ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>