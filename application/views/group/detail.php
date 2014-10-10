<h1>Agents in group '<?= $group->name ?>'</h1>

<?php if(count($agents)) : ?>
    <div class="list">
        <ul class="list-unstyled">
            <?php
            foreach($agents as $agent) {
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
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        There is no agents in this group yet!
    </div>
<?php endif; ?>




<div class="form">
    <?php if(count($agents_to_add)) : ?>
        <?php
            echo Form::open('group/add_agent', array('class' => 'add_form form-inline'));
            echo Form::hidden('group_id', $group->id);
            echo '<div class="input-group">';
            echo Form::select('agent', $agents_to_add, array_rand($agents_to_add), array('class' => 'form-control'));
            echo '<span class="input-group-btn">' . Form::submit(null, 'Add to this group', array('class' => "btn btn-primary add-to-group-btn"))  . '</span></div>';
            echo Form::close();
        ?>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            There is no agents, yet, or all agents already included in this group. <?= HTML::anchor('agent/add', 'Add some.'); ?>
        </div>
    <?php endif; ?>
</div>