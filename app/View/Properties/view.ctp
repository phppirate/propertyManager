<div class="properties view">
<h2><?php echo __('Property'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($property['Property']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($property['Property']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($property['Property']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($property['Property']['zip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['id']), null, __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Property Details'); ?></h3>
	<?php if (!empty($property['PropertyDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Business'); ?></th>
		<th><?php echo __('Source Type'); ?></th>
		<th><?php echo __('Source Of Contact'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Date Of Contact'); ?></th>
		<th><?php echo __('Requirements'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($property['PropertyDetail'] as $propertyDetail): ?>
		<tr>
			<td><?php echo $propertyDetail['id']; ?></td>
			<td><?php echo $propertyDetail['property_id']; ?></td>
			<td><?php echo $propertyDetail['business']; ?></td>
			<td><?php echo $propertyDetail['source_type']; ?></td>
			<td><?php echo $propertyDetail['source_of_contact']; ?></td>
			<td><?php echo $propertyDetail['status']; ?></td>
			<td><?php echo $propertyDetail['date_of_contact']; ?></td>
			<td><?php echo $propertyDetail['requirements']; ?></td>
			<td><?php echo $propertyDetail['comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'property_details', 'action' => 'view', $propertyDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'property_details', 'action' => 'edit', $propertyDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_details', 'action' => 'delete', $propertyDetail['id']), null, __('Are you sure you want to delete # %s?', $propertyDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Property Detail'), array('controller' => 'property_details', 'action' => 'add', 'id' => $property['Property']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($property['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($property['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add', 'property' => $property['Property']['id'])); ?> </li>
		</ul>
	</div>
</div>
