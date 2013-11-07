<?php
$this->assign('title', 'Forgot password');
?>
<div class='row'>
    <div class='span4 offset4'>
        <div class="form">
            <div class='well'>
                <legend>Forgot Password</legend>
                    <?php echo $this->Session->flash('auth'); ?>
                    <?php echo $this->Form->create('User'); ?>

                    <?php echo $this->Form->input(
                        'email',
                        array(
                            'autofocus'=>'autofocus',
                            'type'=>'email'
                        )
                    ); ?>

        <?php echo $this->Form->end(array(
            'label' => 'Submit',
            'class' => 'btn btn-success')); ?>
        </div>
    </div>
</div>