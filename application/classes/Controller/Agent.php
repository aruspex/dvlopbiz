<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agent extends Controller_Base
{
    protected $model = 'Agent';
    protected $items = 'agents';
    protected $view_list = array(
        'list' => 'agent/list',
        'add'  => 'agent/add'
    );
}
