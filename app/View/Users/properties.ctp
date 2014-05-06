<!-- CakePHP View File -->
<div class="row">
    <div class="related">
        <h2><?php echo __(AuthComponent::user('name') . '\'s Properties'); ?></h2>
        <?php if (!empty($properties)): ?>
            <div class="table-responsive">
                <table cellpadding = "0" cellspacing = "0" class="table">
                    <tr>
                        <th><?php echo __('Address'); ?></th>
                        <th><?php echo __('City'); ?></th>
                        <th><?php echo __('State'); ?></th>
                        <th><?php echo __('Zip'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php foreach ($properties as $property): ?>
                        <tr>
                            <td><?php echo $property['address']; ?></td>
                            <td><?php echo $property['city']; ?></td>
                            <td><?php echo $property['state']; ?></td>
                            <td><?php echo $property['zip']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'users',
                                    'action' => 'view_property', $property['id']), array('class' => 'btn btn-primary btn-small'));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
</div>