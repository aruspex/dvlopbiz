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
        $id = $this->request->param('id');
        $group = ORM::factory('Group')->find($id);
        $agents = $group->agents->find_all();
        $view = View::factory('group/detail')
            ->bind('agents', $agents)
            ->set('group', $group->name);
        $this->template->content = $view;

    }

}
