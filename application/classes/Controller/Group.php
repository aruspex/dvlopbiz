<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller_Base
{

    protected $model = 'Group';
    protected $items = 'groups';

    protected $view_list = array(
        'list' => 'group/list',
        'add'  => 'group/add'
    );

    public function action_detail() {
        $name = $this->request->param('id');
        $group = ORM::factory('Group', array('name' => $name));
        $agents = $group->agents->find_all();
        $agents_to_add = ORM::factory('Group')->get_agents_not_in($name);

        $view = View::factory('group/detail')
            ->bind('agents', $agents)
            ->set('agents_to_add', $agents_to_add)
            ->set('group', $group);
        $this->template->content = $view;

    }

    protected function get_group_detail_url($name)
    {
        return Route::get('default')->uri(array(
            'controller' => 'group',
            'action'     => 'detail',
            'id'         => $name
        ));

    }

    public function action_remove_agent() {
        if ($this->request->method() === 'POST')
        {
            $group_id = intval($this->request->post('group_id'));
            $agent_id = intval($this->request->post('agent_id'));

            $group = ORM::factory('Group', $group_id);

            $group->remove('agents', $agent_id);
        }

        $this->redirect($this->get_group_detail_url($group->name));
    }

    public function action_add_agent() {
        if ($this->request->method() === 'POST')
        {
            $agent_email = $this->request->post('agent');
            $agent = ORM::factory('Agent', array('email' => $agent_email));

            $group_id = intval($this->request->post('group_id'));

            $group = ORM::factory('Group', $group_id);

            $group->add('agents', $agent->id);
        }

        $this->redirect($this->get_group_detail_url($group->name));
    }

}
