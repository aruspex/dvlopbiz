<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {

	public function action_index()
	{
        $agents = ORM::factory('Agent')->find_all();
        $view = View::factory('index')
            ->bind('agents', $agents);
		$this->response->body($view);
	}

}
