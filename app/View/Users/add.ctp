<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
        if(isset($this->passedArgs['property'])){
            $propertyId = $this->passedArgs['property'];
        } else {
            $propertyId = null;
        }
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('role', array('options' => array('customer' => 'customer', 'admin' => 'admin'), 'selected' => 'customer'));
		echo $this->Form->input('Property', array('selected' => $propertyId));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
