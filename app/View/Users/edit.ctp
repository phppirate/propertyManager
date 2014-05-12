<div class="users form">
<h2>
    <?php echo __('Edit User'); ?>
    <span class="hth pull-right">
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>', array('action' => 'view', AuthComponent::user('id')), array('class' => '', 'escape' => false)); ?>
            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $this->Form->value('User.id')), array('class' => '', 'escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>',
            array('action' => 'index'), array('class' => '', 'escape' => false)); ?>
    </span>
</h2>
<?php echo $this->Form->create('User', array('role' => 'form')); ?>
	<fieldset>
        <div class="form-group">
            <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('password', array('value' => '', 'class' => 'form-control')); ?>
        </div>
        <div class="form-group required">
            <small>do not enter if you don't want your password changed.</small>
            <?php //echo $this->Form->input('confirmationPassword', array('class' => 'form-control')); ?>
        </div>
        <?php
            if ($this->App->admin()){
                echo '<div class="form-group">' . $this->Form->input('role', array('options' => array('customer' => 'customer',
                    'admin' => 'admin'), 'class' => 'form-control')) . '</div>';
                echo '<div class="form-group">' . $this->Form->input('Property', array('class' => 'form-control')) .
                    '</div>';
            }
        ?>
	</fieldset>
<?php echo $this->Form->submit(__('Update User'), array('class' => 'btn btn-success')); ?>
</div>
