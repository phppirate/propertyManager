<div class="propertyDetails view">
<h2><?php echo __('Property Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertyDetail['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyDetail['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['business']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source Type'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['source_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source Of Contact'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['source_of_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Contact'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['date_of_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirements'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['requirements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($propertyDetail['PropertyDetail']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property Detail'), array('action' => 'edit', $propertyDetail['PropertyDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property Detail'), array('action' => 'delete', $propertyDetail['PropertyDetail']['id']), null, __('Are you sure you want to delete # %s?', $propertyDetail['PropertyDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Property Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
