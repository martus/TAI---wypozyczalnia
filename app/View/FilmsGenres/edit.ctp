<div class="filmsGenres form">
<?php echo $this->Form->create('FilmsGenre');?>
	<fieldset>
		<legend><?php echo __('Edit Films Genre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('film_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FilmsGenre.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FilmsGenre.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Films Genres'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
