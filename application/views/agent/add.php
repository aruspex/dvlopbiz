<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - add new agent</title>
</head>
<body>
    <h2>Add new agent</h2>
    <?php


    echo Form::open();

    echo Form::label('email', 'Email');
    echo Form::input('email');

    echo Form::submit(null, 'Add');


    echo Form::close();

    ?>
</body>
</html>