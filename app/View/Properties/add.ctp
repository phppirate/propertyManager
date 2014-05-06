<div class="properties form col-lg-4 col-md-6 col-sm-12">
<?php echo $this->Form->create('Property', array('enctype' => 'multipart/form-data' )); ?>
	<fieldset>
        <h2>
            <?php echo __('Add Property'); ?>
            <span class="hth pull-right">
                <?php echo $this->Html->link('<span
                class="glyphicon glyphicon-list"></span>', array('action' => 'index'), array('class' => '',
                    'escape' => false) ); ?>
            </span>
        </h2>
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
	</fieldset>
<?php echo $this->Form->submit(__('Publish Property'), array('class' => 'btn btn-success')); ?>
</div>