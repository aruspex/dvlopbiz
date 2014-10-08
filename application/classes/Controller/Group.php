<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller {

    public function action_list()
    {   
        $groups = ORM::factory('Group')->find_all();
        $view = View::factory('group/list')
            ->bind('groups', $groups);
        $this->response->body($view);
    }

    public function action_add()
    {
        if ($this->request->method() === 'POST') {
            $group = ORM::factory('Group');
            $group->name = $this->request->post('name');
            $group->save();

            $this->redirect('group/list');
        }
        $view = View::factory('group/add')
            ->bind('errors', $errors);
        $this->response->body($view);
    }

}
