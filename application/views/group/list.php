<div class="list">
    <ul class="list-unstyled">
        <?php
        foreach($groups as $group)
        {
            $route = Route::get('default')->uri(array(
                'controller' => 'group',
                'action' => 'detail',
                'id' => $group->name
            ));
            echo '<li class="list_item">';
            echo '<div class="item">' . HTML::anchor($route, $group->name) . '</div>';
            echo Form::open('group/delete', array('class' => 'delete_form'));
            echo Form::hidden('id', $group->id);
            echo Form::submit(null, 'Delete', array('class' => "btn btn-danger"));
            echo Form::close();
            echo '</li>';
        }
        ?>
    </ul>
</div>

<div class="form">
    <?php
    echo Form::open('group/add', array('class' => 'add_form form-inline'));
    echo '<div class="input-group">';
    echo Form::input('name', '', array('placeholder' => 'group name', 'class' => 'form-control'));
    echo '<span class="input-group-btn">' . Form::submit(null, 'Add group', array('class' => "btn btn-primary")) . '</span></div>';

    if (isset($errors))
    {
        echo $errors;
    }


    echo Form::close();
    ?>

</div>