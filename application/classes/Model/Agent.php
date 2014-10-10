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

    public function rules() {
        return array(
            'email' => array(
                array('not_empty'),
                array('email'),
                array('max_length', array(':value', 70)),
                array(array($this, 'email_available'))
            )
        );
    }

    public function email_available($email) {
        return ! ORM::factory('Agent', array('email' => $email))->loaded();
    }
}