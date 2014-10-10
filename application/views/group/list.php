<?php

foreach($groups as $group)
{
    echo $group->name;
    echo Form::open('group/delete');
    echo Form::hidden('id', $group->id);
    echo Form::submit(null, 'Delete');
    echo Form::close();
}


echo Form::open('group/add');

echo Form::label('name', 'Name');
echo Form::input('name');

echo Form::submit(null, 'Add');

if (isset($errors))
{
    echo $errors;
}
echo Form::close();