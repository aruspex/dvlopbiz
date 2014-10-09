<?php

class Model_Agent extends ORM
{
    protected $_table_name = 'agents';
    protected $_has_many = array(
        'groups' => array(
            'model'   => 'Group',
            'through' => 'agents_groups',
            'far_key' => 'group_id',
            'foreign_key' => 'agent_id'
        )
    );
}