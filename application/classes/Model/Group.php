<?php

class Model_Group extends ORM
{
    protected $_table_name = 'groups';
    protected $_has_many = array(
        'agents' => array(
            'model'   => 'Agent',
            'through' => 'agents_groups',
            'far_key' => 'agent_id',
            'foreign_key' => 'group_id'
        )
    );
}