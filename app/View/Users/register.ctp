<div class='row'>
    <div class='span6 offset3'>
        <div class='form well'>

            <legend>Register</legend>
            <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
            <div class="control-group">
                <?php echo $this->Form->input(
                    'username',
                    array(
                        'autofocus'=>'autofocus',
                        'style'=>'width:336px',
                        'label' => array(
                            'class' => 'control-label',
                            'text' => 'Your name'
                        ),
                        'between'=> '<div class="controls">',
                        'after' => '</div>'
                    )
                ); ?>
            </div>

            <div class="control-group">
                <?php echo $this->Form->input(
                    'email',
                    array(
                        'style'=>'width:308px',
                        'between'=> '<div class="controls"><span class="add-on"><i class="icon-envelope"></i></span>',
                        'after' => '</div>',
                        'div' => array(
                            'class' => 'input-prepend'
                        ),
                        'label' => array('class' => 'control-label')
                    )
                ); ?>
            </div>

            <div class="control-group">
                <?php echo $this->Form->input(
                    'password',
                    array(
                        'style'=>'width:336px',
                        'after' => '<span class="help-block">Please choose a safe, memorable passphrase.</span></div>',
                        'label' => array('class' => 'control-label'),
                        'between'=> '<div class="controls">'
                    )
                );?>
            </div>

            <div class="control-group">
                <?php echo $this->Form->input(
                    'affiliated_institution',
                    array(
                        'style'=>'width:336px',
                        'after' => '<span class="help-block">Which, if any, institution are you affiliated with?</span></div>',
                        'label' => array('class' => 'control-label'),
                        'between'=> '<div class="controls">'
                    )
                ); ?>
            </div>

            <div class="control-group">
                <?php echo $this->Form->input(
                    'section',
                    array(
                        'style'=>'width:336px',
                        'after' => '<span class="help-block">Optional - usually a course code or professor\'s name.</span></div>',
                        'label' => array('class' => 'control-label'),
                        'between'=> '<div class="controls">'
                    )
                ); ?>
            </div>

            <div class="control-group">
                <?php echo $this->Form->input(
                    'occupation',
                    array(
                        'style'=>'width:336px',
                        'after' => '<span class="help-block">What is your occupation?</span></div>',
                        'label' => array('class' => 'control-label'),
                        'between'=> '<div class="controls">'
                    )
                ); ?>
            </div>

            <div class="control-group">
                <?php echo $this->Form->input(
                    'your_expertise',
                    array(
                        'style'=>'width:350px',
                        'options' => array(
                            'Very low (no statistics classes taken)',
                            'Low (undergraduate statistics training)',
                            'Average (undergraduate statistics training, some interest in statistics)',
                            'High (graduate statistics training)',
                            'Very high (taught statistics classes, PhD in psychological methods, etc.)'
                        ),
                        'after' => '<span class="help-block">Where do you see yourself in terms of the statistical expertise needed for this meta-analysis?</span></div>',
                        'label' => array('class' => 'control-label'),
                        'between'=> '<div class="controls">'
                    )
                ); ?>
            </div>

            <?php echo $this->Form->end(
                array(
                   'label' => 'Register',
                   'class' => 'btn btn-primary'
                )
            ); ?>

        </div>
    </div>
</div>