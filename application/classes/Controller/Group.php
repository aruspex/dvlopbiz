<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller_Base {

    protected $model = 'Group';
    protected $items = 'groups';

    protected $view_list = array(
        'list' => 'group/list',
        'add'  => 'group/add'
    );

}
