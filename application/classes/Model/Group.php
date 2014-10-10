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

    public function rules() {
        return array(
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 70)),
                array(array($this, 'name_available'))
            )
        );
    }

    public function name_available($name) {
        return ! ORM::factory('Group', array('name' => $name))->loaded();
    }

    public function get_agents_not_in($name) {
        return DB::select('email')
            ->from('agents')
            ->where('email', 'NOT IN', DB::select('email')
                ->from('agents')
                ->join('agents_groups')
                ->on('agents.id', '=', 'agents_groups.agent_id')
                ->join('groups')
                ->on('groups.id', '=', 'agents_groups.group_id')
                ->where('name', '=', $name))
            ->execute()
            ->as_array('email', 'email');
    }
}