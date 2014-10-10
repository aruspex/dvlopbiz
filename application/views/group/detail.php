<h1>Agents in group <?= $group->name ?></h1>

<div class="list">
    <ul class="list-unstyled">
        <?php
        foreach($agents as $agent)
        {
            echo '<li class="list_item">';
            echo '<div class="item">' . $agent->email . '</div>';
            echo Form::open('group/remove_agent', array('class' => 'delete_form'));
            echo Form::hidden('group_id', $group->id);
            echo Form::hidden('agent_id', $agent->id);
            echo Form::submit(null, 'Delete', array('class' => "btn btn-danger"));
            echo Form::close();
            echo '</li>';
        }
        ?>
    </ul>
</div>





<div class="form">
    <?php
    echo Form::open('group/add_agent', array('class' => 'add_form form-inline'));
    echo Form::hidden('group_id', $group->id);
    echo Form::select('agent', $agents_to_add, array('class' => 'form-control'));
    echo Form::submit(null, 'Add to this group', array('class' => "btn btn-primary add-to-group-btn"));

    if (isset($errors))
    {
        echo $errors;
    }


    echo Form::close();
    ?>

</div>