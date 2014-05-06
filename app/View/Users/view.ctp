<div class="users view">
<h2>
    <?php echo __('User'); ?>
    <span class="hth pull-right">
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit',
            $user['User']['id']), array('class' => '', 'escape' => false)); ?>
        <?php if ($this->App->admin()): ?>
            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $user['User']['id']), array('class' => '', 'escape' => false), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>', array('action' => 'index'), array('class' => '', 'escape' => false)); ?>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', array('action' => 'add'), array('class' => '', 'escape' => false)); ?>
        <?php endif; ?>
    </span>
</h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php if ($this->App->admin()): ?>

    <div class="related">
        <h3>
            <?php echo __('Related Properties'); ?>
            <span class="hth pull-right">
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', array('controller' => 'properties', 'action' => 'add'), array('class' => '', 'escape' => false)); ?>
            </span>
        </h3>
        <?php if (!empty($user['Property'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Address'); ?></th>
                    <th><?php echo __('City'); ?></th>
                    <th><?php echo __('State'); ?></th>
                    <th><?php echo __('Zip'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($user['Property'] as $property): ?>
                    <tr>
                        <td><?php echo $property['id']; ?></td>
                        <td><?php echo $property['address']; ?></td>
                        <td><?php echo $property['city']; ?></td>
                        <td><?php echo $property['state']; ?></td>
                        <td><?php echo $property['zip']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('controller' => 'properties',
                                'action' => 'view', $property['id']), array('class' => 'btn btn-primary btn-sm')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'properties',
                                'action' => 'edit', $property['id']), array('class' => 'btn btn-success btn-sm')); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
<?php endif; ?>
