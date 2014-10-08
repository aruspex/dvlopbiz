<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller {

    public function action_list()
    {   
        echo 'foo';
        $groups = ORM::factory('Group')->find(1);
        echo 'bar';
        $view = View::factory('group/list')
            ->bind('groups', $groups);
        $this->response->body($view);
    }

}
