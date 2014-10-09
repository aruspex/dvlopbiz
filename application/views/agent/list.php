<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - agents list</title>
</head>
<body>
    <?php

    foreach($agents as $agent)
    {
        echo $agent->email;
        echo Form::open('agent/delete');
        echo Form::hidden('id', $agent->id);
        echo Form::submit(null, 'Delete');
        echo Form::close();
    }
    ?>
</body>
</html>