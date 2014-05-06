<div class="properties view">
<h2>
    <?php echo __('Property'); ?>
    <span class="hth pull-right">
        <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $property['Property']['id']),
        array('class' => '', 'escape' => false) ); ?>
        <?php echo $this->Form->postLink('<span
        class="glyphicon glyphicon-remove"></span>', array('controller' => 'properties', 'action' => 'delete',
                $property['Property']['id']), array('class' => '', 'escape' => false),
            __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
        <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-list"></span>', array('action' => 'index'), array('class' => '',
            'escape' => false) ); ?>
        <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-plus"></span>', array('action' => 'add'), array('class' => '', 'escape' => false) ); ?>
    </span>
</h2>
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
        <dt><?php echo __('Image'); ?></dt>
        <dd class="text-center image">
            <?php if ($property['Property']['image_path']){ echo $this->Html->image($property['Property']['image_path']); } ?>
            &nbsp;
        </dd>
	</dl>
</div>
<div class="related">
	<h3>
        <?php echo __('Property Details'); ?>
        <span class="hth pull-right">
            <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-plus"></span>', array('controller' => 'propertyDetails', 'action' => 'add',
                    'id' => $property['Property']['id']),
                array('class' => '',
                    'escape' => false) ); ?>
        </span>
    </h3>
	<?php if (!empty($property['PropertyDetail'])): ?>
	<div class="table-responsive">
        <table cellpadding = "0" cellspacing = "0" class="table">
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
                        <?php echo $this->Html->link(__('View'), array('controller' => 'property_details',
                            'action' => 'view', $propertyDetail['id']), array('class' => 'btn btn-primary btn-sm')); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'property_details',
                            'action' => 'edit', $propertyDetail['id']), array('class' => 'btn btn-success btn-sm')); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'property_details',
                                'action' => 'delete', $propertyDetail['id']), array('class' => 'btn btn-danger btn-sm'), null,
                            __('Are you sure you want to delete # %s?', $propertyDetail['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
	</div>
<?php endif; ?>
<?php if ($this->App->admin()): ?>
    <div class="related">
        <h3>
            <?php echo __('Related Users'); ?>
            <span class="hth pull-right">
            <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-plus"></span>', array('controller' => 'users', 'action' => 'add',
                    'id' => $property['Property']['id']),
                array('class' => '',
                    'escape' => false) ); ?>
        </span>
        </h3>
        <?php if (!empty($property['User'])): ?>
            <div class="table-responsive">
                <table cellpadding = "0" cellspacing = "0" class="table">
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
                                <?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view',
                                    $user['id']), array('class' => 'btn btn-primary btn-sm')); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit',
                                    $user['id']), array('class' => 'btn btn-success btn-sm')); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<div class="related">
    <h3>
        <?php echo __('Related Notes'); ?>
        <span class="hth pull-right">
        <?php echo $this->Html->link('<span
    class="glyphicon glyphicon-plus"></span>', array('controller' => 'notes', 'action' => 'add',
                'property' => $property['Property']['id']),
            array('class' => '',
                'escape' => false) ); ?>
    </span>
    </h3>
    <?php if (!empty($property['Property'])): ?>
        <div class="table-responsive">
            <table cellpadding = "0" cellspacing = "0" class="table">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('User'); ?></th>
                    <th><?php echo __('Title'); ?></th>
                    <th><?php echo __('Content'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($property['Note'] as $note): ?>
                    <tr>
                        <td><?php echo $note['id']; ?></td>
                        <td><?php echo $note['user_id']; ?></td>
                        <td><?php echo $note['title']; ?></td>
                        <td><?php echo $note['content']; ?></td>
                        <td class="actions">
                            <?php if ($this->App->admin()){ echo $this->Html->link(__('Edit'),
                                array('controller' => 'notes',
                                    'action' => 'edit',
                                    $note['id']), array('class' => 'btn btn-success btn-sm')); } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>
