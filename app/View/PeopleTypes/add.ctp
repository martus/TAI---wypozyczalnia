<div class="peopleTypes form">
<?php echo $this->Form->create('PeopleType');?>
	<fieldset>
		<legend><?php echo __('Add People Type'); ?></legend>
	<?php
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People Types'), array('action' => 'index'));?></li>
	</ul>
</div>
