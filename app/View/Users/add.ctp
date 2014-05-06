<div class="users form col-lg-4 col-md-6 col-sm-12">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<h2>
            <?php echo __('Add User'); ?>
            <span class="hth pull-right">
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>', array('action' => 'index'), array('class' => '',
                    'escape' => false)); ?>
            </span>
        </h2>
        <?php
            if(isset($this->passedArgs['property'])){
                $propertyId = $this->passedArgs['property'];
            } else {
                $propertyId = null;
            }
        ?>
		<div class="form-group">
            <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
		</div>
		<div class="form-group">
            <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
		</div>
		<div class="form-group">
            <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
		</div>
		<div class="form-group">
            <?php echo $this->Form->input('role', array('options' => array('customer' => 'customer', 'admin' => 'admin'), 'selected' => 'customer', 'class' => 'form-control')); ?>
		</div>
	</fieldset>
<?php echo $this->Form->submit(__('Add User'), array('class' => 'btn btn-success')); ?>
</div>