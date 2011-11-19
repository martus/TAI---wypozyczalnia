<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('id_card_number');
		echo $this->Form->input('city');
		echo $this->Form->input('street');
		echo $this->Form->input('post_code');
		echo $this->Form->input('country_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hires'), array('controller' => 'hires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hire'), array('controller' => 'hires', 'action' => 'add')); ?> </li>
	</ul>
</div>
