<div class="properties">
    <h2><?php echo __('Property'); ?></h2>
    <dl>
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
        <dd class="image text-center">
            <?php if ($property['Property']['image_path']){ echo $this->Html->image
                ($property['Property']['image_path'], array('align' => 'center')); } ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="related">
    <h3 class="page-header"><?php echo __('Notes'); ?></h3>
    <?php if (!empty($property['Property'])): ?>
        <?php foreach ($property['Note'] as $note): ?>
            <div class="well">
                <h4><?php echo $note['title']; ?></h4>
                <p><?php echo $note['content']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>