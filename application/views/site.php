<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz</title>
    <link rel="stylesheet" href="/dvlopbiz/media/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dvlopbiz/media/css/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <?php foreach (array('Group', 'Agent') as $item): ?>
                <?php if ($active == $item): ?>
                    <li class='active'>
                <?php else: ?>
                    <li>
                <?php endif; ?>
                    <?= HTML::anchor(strtolower($item) . '/list', $item . 's') ?>
                </li>
            <?php endforeach ?>
        </ul>
        <h3 class="text-muted">Dvlopbiz</h3>
    </div>
    <div class="content">
        <?= $content; ?>
    </div>
</div>
</body>
</html>