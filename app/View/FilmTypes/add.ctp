<div class="filmTypes form">
<?php echo $this->Form->create('FilmType');?>
	<fieldset>
		<legend><?php echo __('Add Film Type'); ?></legend>
	<?php
		echo $this->Form->input('type');
		echo $this->Form->input('cost_per_day');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Film Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
