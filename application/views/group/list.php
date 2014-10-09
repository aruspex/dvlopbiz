<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - groups list</title>
</head>
<body>
    <?php

    foreach($groups as $group)
    {
        echo $group->name;
        echo Form::open('group/delete');
        echo Form::hidden('id', $group->id);
        echo Form::submit(null, 'Delete');
        echo Form::close();
    }
    ?>
</body>
</html>