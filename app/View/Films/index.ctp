<div class="films index">
	<h2><?php echo __('Films');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('original_title');?></th>
			<th><?php echo $this->Paginator->sort('polish_title');?></th>
			<th><?php echo $this->Paginator->sort('production_year');?></th>
			<th><?php echo $this->Paginator->sort('film_type_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($films as $film): ?>
	<tr>
		<td><?php echo h($film['Film']['id']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['original_title']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['polish_title']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['production_year']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($film['FilmType']['id'], array('controller' => 'film_types', 'action' => 'view', $film['FilmType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $film['Film']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $film['Film']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $film['Film']['id']), null, __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Film Types'), array('controller' => 'film_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film Type'), array('controller' => 'film_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
