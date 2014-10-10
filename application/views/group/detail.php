<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dvlopbiz - group info</title>
</head>
<body>
    <h1>Agents in group <?= $group->name ?></h1>
    <ul>
        <?php foreach($agents as $agent): ?>
            <li>
                <?php
                    echo $agent->email;
                    echo Form::open('group/remove_agent');
                    echo Form::hidden('group_id', $group->id);
                    echo Form::hidden('agent_id', $agent->id);
                    echo Form::submit(null, 'Delete');
                    echo Form::close();
                ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>