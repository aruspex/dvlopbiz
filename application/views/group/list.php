<?php

foreach($groups as $group)
{
    $route = Route::get('default')->uri(array(
        'controller' => 'group',
        'action' => 'detail',
        'id' => $group->id
    ));
    echo HTML::anchor($route, $group->name);
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