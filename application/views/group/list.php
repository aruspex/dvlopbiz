<?php

foreach($groups as $group)
{
    echo $group->name;
    echo Form::open('group/delete');
    echo Form::hidden('id', $group->id);
    echo Form::submit(null, 'Delete');
    echo Form::close();
}