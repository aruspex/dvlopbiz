<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{

    public $template = 'site';

    public function action_index() {
        $this->template->body = 'bl';
    }
}