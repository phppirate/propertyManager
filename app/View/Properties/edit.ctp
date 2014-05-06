<div class="properties form col-lg-4 col-md-6 col-sm-12">
    <h2>
        <?php echo __('Edit Property'); ?>
        <span class="hth pull-right">
        <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-search"></span>', array('action' => 'view', $this->Form->value('Property.id')),
            array('class' => '', 'escape' => false) ); ?>
        <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $this->Form->value('Property.id')), array('class' => '', 'escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Property.id'))); ?>
        <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-list"></span>', array('action' => 'index'), array('class' => '',
            'escape' => false) ); ?>
        <?php echo $this->Html->link('<span
        class="glyphicon glyphicon-plus"></span>', array('action' => 'add'), array('class' => '', 'escape' => false) ); ?>
        </span>
    </h2>
<?php echo $this->Form->create('Property', array('enctype' => 'multipart/form-data')); ?>
<fieldset>
    <?php echo $this->Form->input('id'); ?>
    <div class="form-group">
        <?php echo $this->Form->input('address', array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('city', array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('state', array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('zip', array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('image_path', array('type' => 'file'), array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('User', array('class' => '')); ?>
    </div>
</fieldset>
<?php echo $this->Form->end(__('Update Property'), array('class' => 'btn btn-success')); ?>
</div>
