<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agent extends Controller {

	public function action_list()
	{
        $agents = ORM::factory('Agent')->find_all();
        $view = View::factory('agent/list')
            ->bind('agents', $agents);
		$this->response->body($view);
	}

    public function action_add()
    {
        if ($this->request->method() === 'POST') {
            $agent = ORM::factory('Agent');
            $agent->email = $this->request->post('email');
            $agent->save();

            $this->redirect('agent/list');
        }
        $view = View::factory('agent/add')
            ->bind('errors', $errors);
        $this->response->body($view);
    }

}
