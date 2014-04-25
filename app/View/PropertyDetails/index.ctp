<div class="propertyDetails index">
	<h2><?php echo __('Property Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('business'); ?></th>
			<th><?php echo $this->Paginator->sort('source_type'); ?></th>
			<th><?php echo $this->Paginator->sort('source_of_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('requirements'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($propertyDetails as $propertyDetail): ?>
	<tr>
		<td><?php echo h($propertyDetail['PropertyDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertyDetail['Property']['id'], array('controller' => 'properties', 'action' => 'view', $propertyDetail['Property']['id'])); ?>
		</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['business']); ?>&nbsp;</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['source_type']); ?>&nbsp;</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['source_of_contact']); ?>&nbsp;</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['status']); ?>&nbsp;</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['date_of_contact']); ?>&nbsp;</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['requirements']); ?>&nbsp;</td>
		<td><?php echo h($propertyDetail['PropertyDetail']['comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertyDetail['PropertyDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertyDetail['PropertyDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertyDetail['PropertyDetail']['id']), null, __('Are you sure you want to delete # %s?', $propertyDetail['PropertyDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Property Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
