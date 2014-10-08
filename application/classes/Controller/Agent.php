<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agent extends Controller {

	public function action_list()
	{
        $agents = ORM::factory('Agent')->find_all();
        $view = View::factory('agent/list')
            ->bind('agents', $agents);
		$this->response->body($view);
	}

}
