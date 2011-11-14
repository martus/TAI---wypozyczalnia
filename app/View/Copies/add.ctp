<div class="copies form">
<?php echo $this->Form->create('Copy');?>
	<fieldset>
		<legend><?php echo __('Add Copy'); ?></legend>
	<?php
		echo $this->Form->input('film_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hires'), array('controller' => 'hires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hire'), array('controller' => 'hires', 'action' => 'add')); ?> </li>
	</ul>
</div>
