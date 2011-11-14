<div class="filmsGenres view">
<h2><?php  echo __('Films Genre');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($filmsGenre['FilmsGenre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filmsGenre['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $filmsGenre['Genre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filmsGenre['Film']['id'], array('controller' => 'films', 'action' => 'view', $filmsGenre['Film']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Films Genre'), array('action' => 'edit', $filmsGenre['FilmsGenre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Films Genre'), array('action' => 'delete', $filmsGenre['FilmsGenre']['id']), null, __('Are you sure you want to delete # %s?', $filmsGenre['FilmsGenre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Films Genres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Films Genre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
