<div class="properties form">
<?php echo $this->Form->create('Property', array('enctype' => 'multipart/form-data' ); ?>
	<fieldset>
		<legend><?php echo __('Add Property'); ?></legend>
	<?php
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
        echo $this->Form->input('zip');
        echo $this->Form->input('image_path', array('type', 'file'));
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
	</ul>
</div>
