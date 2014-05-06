<!-- CakePHP View File -->

<div class="users form col-lg-4 col-md-6 col-sm-12">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your email and password'); ?>
        </legend>
        <div class="form-group">
            <?php echo $this->Form->input('username', array('label' => 'Email', 'class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
        </div>
    </fieldset>

    <?php
        echo $this->Form->submit( 'Send', array('class' => 'btn btn-success', 'title' => 'Login To Your Account.'));
    ?>
</div>