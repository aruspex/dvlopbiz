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
        $group = ORM::factory('Group')->find();
        var_dump($group);
        $agents = $group->agents->find_all();
        $view = View::factory('group/detail')
            ->bind('group', $group->name)->bind('agents', $agents);
        // id должно быть числовым - проверить тип
        $this->response->body($view);

    }

}
