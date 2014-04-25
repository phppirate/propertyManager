<div class="propertyDetails form">
<?php echo $this->Form->create('PropertyDetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Property Detail'); ?></legend>
	<?php
	    if(isset($this->passedArgs['id'])){
	      $propertyId = $this->passedArgs['id'];
	    } else {
	        $propertyId = null;
	    }
		echo $this->Form->input('property_id', array('selected' => $propertyId));
		echo $this->Form->input('business');
		echo $this->Form->input('source_type', array('options' => ['Sign','Flyer','Cold Call Telephone','Cold Call Canvassing','Co-Broker','Other']));
		echo $this->Form->input('source_of_contact');
		echo $this->Form->input('status', array('options' => ['Very Interested','Some Interest','Not Interested','Toured Location','Verbal Offer','Written Offer','Negotiation','Contract to Prospect','Contract Signed','Other']));
		echo $this->Form->input('date_of_contact');
		echo $this->Form->input('requirements');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Property Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
