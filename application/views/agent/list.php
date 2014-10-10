<?php

foreach($agents as $agent)
{
    echo $agent->email;
    echo Form::open('agent/delete');
    echo Form::hidden('id', $agent->id);
    echo Form::submit(null, 'Delete');
    echo Form::close();
}

echo Form::open('agent/add');

echo Form::label('email', 'Email');
echo Form::input('email');

echo Form::submit(null, 'Add');


echo Form::close();