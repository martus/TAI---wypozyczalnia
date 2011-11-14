<div class="filmTypes form">
<?php echo $this->Form->create('FilmType');?>
	<fieldset>
		<legend><?php echo __('Edit Film Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('cost_per_day');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FilmType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FilmType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Film Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
