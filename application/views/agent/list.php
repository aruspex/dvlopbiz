<?php if(count($agents)) : ?>
<div class="list">
    <ul class="list-unstyled">
        <?php foreach($agents as $agent): ?>
            <li class="list_item">
                <?php
                    echo '<div class="item">' . $agent->email . '</div>';
                    echo Form::open('agent/delete', array('class' => 'delete_form'));
                    echo Form::hidden('id', $agent->id);
                    echo Form::submit(null, 'Delete', array('class' => "btn btn-danger"));
                    echo Form::close();
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        There is no agents yet!
    </div>
<?php endif; ?>



<div class="form">
    <?php
    echo Form::open('agent/add', array('class' => 'add_form form-inline'));
    echo '<div class="input-group">';
    echo Form::input('email',
                     '',
                     array(
                        'placeholder' => 'agent email',
                        'class' => 'form-control')
                    );
    echo '<span class="input-group-btn">' . Form::submit(null, 'Add agent', array('class' => "btn btn-primary")) . '</span></div>';

    if (isset($errors)) {
        echo '<div class="alert alert-danger errors" role="alert">'. $errors . '</div>';
    }


    echo Form::close();
    ?>
</div>