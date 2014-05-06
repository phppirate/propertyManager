<div class="propertyDetails form">
<?php echo $this->Form->create('PropertyDetail'); ?>
	<fieldset>
        <?php
        if(isset($this->passedArgs['id'])){
            $propertyId = $this->passedArgs['id'];
        } else {
            $propertyId = null;
        }
        ?>
		<h2><?php echo __('Add Property Detail'); ?><span class="hth pull-right"><?php echo
                    $this->Html->link('<span class="glyphicon glyphicon-remove"></span>', array('controller' => 'properties', 'action' => 'view',
                    $propertyId), array('escape' => false)); ?></span></h2>
        <?php if ($propertyId): ?>
            <?php echo $this->Form->input('property_id', array('type' => 'hidden', 'label' => 'none')); ?>
        <?php else: ?>
            <div class="form-group"><?php echo $this->Form->input('property_id', array('selected' => $propertyId,
                    'class' => 'form-control'
                )); ?></div>
        <?php endif; ?>
		<div class="form-group"><?php echo $this->Form->input('business', array('class' => 'form-control')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('source_type', array('options' => ['Sign','Flyer',
                'Cold Call Telephone','Cold Call Canvassing','Co-Broker','Other'], 'class' => 'form-control')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('source_of_contact', array('class' => 'form-control')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('status', array('options' => ['Very Interested',
                'Some Interest','Not Interested','Toured Location','Verbal Offer','Written Offer','Negotiation',
                'Contract to Prospect','Contract Signed','Other'], 'class' => 'form-control')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('date_of_contact', array('class' => 'form-control')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('requirements', array('class' => 'form-control')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('comments', array('class' => 'form-control')); ?></div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>