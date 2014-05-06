<div class="row">
    <div class="users index">
        <h2><?php echo __('Users'); ?> <span class="hth pull-right"><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', array('action' => 'add'), array('class' => '', 'escape' => false) ); ?></span></h2>
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table">
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('username'); ?></th>
                        <th><?php echo $this->Paginator->sort('role'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['role']); ?>&nbsp;</td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-primary btn-sm')); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-success btn-sm')); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger btn-sm'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <div class="pagination">
            <?php
            echo '<li>' . $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')) . '</li>';
            echo $this->Paginator->numbers(array('separator' => ''));
            echo '<li>' . $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')) . '</li>';
            ?>
        </div>
    </div>
</div>
