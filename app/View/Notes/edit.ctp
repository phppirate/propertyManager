<div class="notes form col-lg-4 col-md-6 col-sm-12">
<h2><?php echo __('Edit Note'); ?> <span class="hth pull-right">
        <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $this->Form->value('Note.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Note.id'))); ?>
        <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>',
        array('controller' => 'users', 'action' => 'notes'), array('escape' => false)); ?>
</span></h2>
<?php echo $this->Form->create('Note'); ?>
	<fieldset>
        <div class="form-group">
        <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('user_id', array('type' => 'hidden', 'label' => 'none', 'class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('property_id', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
        <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
        <?php echo $this->Form->input('content', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('date_modified', array('type' => 'date', 'class' => 'form-control')); ?>
        </div>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>

</div>