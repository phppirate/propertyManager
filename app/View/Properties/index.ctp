<div class="row">
    <div class="properties index">
        <h2><?php echo __('Properties'); ?> <span class="hth pull-right"><?php echo $this->Html->link('<span
        class="glyphicon glyphicon-plus"></span>', array('action' => 'add'), array('class' => '', 'escape' => false) ); ?></span></h2>
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" class="table table-responsive">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('address'); ?></th>
                    <th><?php echo $this->Paginator->sort('city'); ?></th>
                    <th><?php echo $this->Paginator->sort('state'); ?></th>
                    <th><?php echo $this->Paginator->sort('zip'); ?></th>
                    <th><?php echo $this->Paginator->sort('Image'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($properties as $property): ?>
                    <tr>
                        <td><?php echo h($property['Property']['id']); ?>&nbsp;</td>
                        <td><?php echo h($property['Property']['address']); ?>&nbsp;</td>
                        <td><?php echo h($property['Property']['city']); ?>&nbsp;</td>
                        <td><?php echo h($property['Property']['state']); ?>&nbsp;</td>
                        <td><?php echo h($property['Property']['zip']); ?>&nbsp;</td>
                        <td><?php echo !empty($property['Property']['image_path']) ? 'Yes' : 'No'; ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view',
                                $property['Property']['id']), array('class' => 'btn btn-primary btn-sm')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit',
                                $property['Property']['id']), array('class' => 'btn btn-success btn-sm')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete',
                                $property['Property']['id']), array('class' => 'btn btn-danger btn-sm'), __('Are you sure you want to delete # %s?',
                                $property['Property']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
            ?>	</p>
        <div class="pagination">
            <li><?php
            echo '<li>' . $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo '<li>' . $this->Paginator->numbers(array('separator' => '</li><li>')) . '</li>';
            echo '<li>' . $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
            ?></li>
        </div>
    </div>
</div>