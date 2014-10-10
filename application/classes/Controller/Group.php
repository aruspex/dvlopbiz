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
        $view = View::factory('group/detail')
            ->bind('agents', $agents)
            ->set('group', $group);
        $this->template->content = $view;

    }

    public function action_remove_agent() {
        if ($this->request->method() === 'POST')
        {
            $group_id = intval($this->request->post('group_id'));
            $agent_id = intval($this->request->post('agent_id'));

            $group = ORM::factory('Group', $group_id);

            $group->remove('agents', $agent_id);
        }

        $url = Route::get('default')->uri(array(
            'controller' => 'group',
            'action'     => 'detail',
            'id'         => $group->name
        ));

        $this->redirect($url);
    }

}
