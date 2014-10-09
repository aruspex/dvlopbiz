<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller {

    protected $view_list;
    protected $model;
    protected $items;

    public function action_list()
    {   
        $items = ORM::factory($this->model)->find_all();

        $view = View::factory($this->view_list['list'])
            ->bind($this->items, $items);
        $this->response->body($view);
    }

    public function action_add()
    {
        if ($this->request->method() === 'POST') {
            $item = ORM::factory($this->model);
            $post_info = $this->request->post();
            foreach($post_info as $key => $value)
            {
                $item->$key = $value;
            }
            $item->save();

            $this->redirect($this->view_list['list']);
        }
        $view = View::factory($this->view_list['add'])
            ->bind('errors', $errors);
        $this->response->body($view);
    }

    public function action_delete()
    {
        if ($this->request->method() === 'POST') {
            ORM::factory($this->model, $this->request->post('id'))
                ->delete();
        }
        $this->redirect($this->view_list['list']);

    }    
}