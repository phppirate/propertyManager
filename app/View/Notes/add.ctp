<div class="notes form col-lg-4 col-md-6 col-sm-12">
<?php echo $this->Form->create('Note'); ?>
	<fieldset>
		<h2>
            <?php echo __('Add Note'); ?>
            <span class="hth pull-right">
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>',
                    array('controller' => 'users', 'action' => 'notes'),
                    array('class' => '',
                    'escape' => false)); ?>
            </span>
        </h2>
		<?php echo $this->Form->input('user_id', array('type' => 'hidden', 'label' => 'none', 'value' => AuthComponent::user('id'))); ?>
        <?php
        if(isset($this->passedArgs['property'])){
            $propertyId = $this->passedArgs['property'];
        } else {
            $propertyId = null;
        }
        ?>
        <div class="form-group">
            <?php echo $this->Form->input('property_id', array('selected' => $propertyId, 'class' => 'form-control')); ?>
        </div>
		<div class="form-group">
            <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
		</div>
		<div class="form-group">
            <?php echo $this->Form->input('content', array('class' => 'form-control')); ?>
		</div>
        <?php echo $this->Form->input('date_modified', array('type' => 'hidden', 'value' => date("Y-m-d h:i:s"))); ?>
	</fieldset>
<?php echo $this->Form->submit(__('Publish'), array('class' => 'btn btn-success')); ?>
</div>