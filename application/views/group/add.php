<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - add new group</title>
</head>
<body>
    <h2>Add new group</h2>
    <?php


    echo Form::open();

    echo Form::label('name', 'Name');
    echo Form::input('name');

    echo Form::submit(null, 'Add');


    echo Form::close();

    ?>
</body>
</html>