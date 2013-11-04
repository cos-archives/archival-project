<div class='row'>
    <div class='span4 offset4'>
        <div class="form">
            <div class='well'>
                <legend>Log In</legend>
                    <?php echo $this->Session->flash('auth'); ?>
                    <?php echo $this->Form->create('User'); ?>

                    <?php echo $this->Form->input('email', array('autofocus'=>'autofocus')); ?>
                    <?php echo $this->Form->input('password'); ?>

        <?php echo $this->Form->end(array(
            'label' => 'Login',
            'class' => 'btn btn-success')); ?>
        </div>
        <p><?=$this->Html->link(__('Forgot your password?'),'/users/forgotPassword'); ?></p>
    </div>
</div>