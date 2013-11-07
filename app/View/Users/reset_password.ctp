<?php
$this->assign('title', 'Reset password');
?>
<div class='row'>
    <div class='span4 offset4'>
        <div class="form">
            <div class='well'>
                <legend>Reset Password</legend>
                    <?php echo $this->Session->flash('auth'); ?>
                    <?php echo $this->Form->create('User'); ?>

                    <?php echo $this->Form->input(
                        'password',
                        array(
                            'autofocus'=>'autofocus',
                            'type'=>'password',
                            'label'=>'New Password'
                        )
                    ); ?>

        <?php echo $this->Form->end(array(
            'label' => 'Submit',
            'class' => 'btn btn-success')); ?>
        </div>
    </div>
</div>