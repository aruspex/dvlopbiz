<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template
{
    protected $view_list;
    protected $model;
    protected $items;
    public $template = 'site';

    public function action_list()
    {   
        $session = Session::instance();
        $errors = $session->get_once('errors');
        $items = ORM::factory($this->model)->find_all();
        $view = View::factory($this->view_list['list'])
            ->bind($this->items, $items);
        $view->errors = $errors;
        $this->template->content = $view;
        $this->template->active = $this->model;
    }

    public function action_add()
    {
        if ($this->request->method() === 'POST') {
            $item = ORM::factory($this->model);
            $post_info = $this->request->post();
            foreach($post_info as $key => $value) {
                $item->$key = strip_tags($value);
            }
            try {
                $item->save();
            } catch (ORM_Validation_Exception $e) {
                $session = Session::instance();
                $errors = $e->errors('models');
                $session->set('errors', $errors[$key]);
            }
        }
        $this->redirect($this->view_list['list']);
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
