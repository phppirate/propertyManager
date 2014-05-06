<div class="row">
    <div class="related">
        <h2><?php echo __('Your Notes'); ?> <span class="hth pull-right"><?php echo $this->Html->link('<span
        class="glyphicon glyphicon-plus"></span>', array('controller' => 'notes', 'action' => 'add'),
                    array('class' => '',
                    'escape' => false) ); ?></span></h2>
        <?php if (!empty($user['Note'])): ?>
            <div class="table-responsive">
                <table cellpadding = "0" cellspacing = "0" class="table">
                    <tr>
                        <th><?php echo __('Property'); ?></th>
                        <th><?php echo __('Title'); ?></th>
                        <th><?php echo __('Content'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php foreach ($user['Note'] as $note): ?>
                        <tr>
                            <td><?php echo $note['property_id']; ?></td>
                            <td><?php echo $note['title']; ?></td>
                            <td><?php echo $note['content']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'notes',
                                    'action' => 'edit', $note['id']), array('class' => 'btn btn-success btn-sm')); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notes',
                                        'action' => 'delete', $note['id']), array('class' => 'btn btn-danger btn-sm'),
                                    __('Are you sure you want to delete # %s?', $note['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>