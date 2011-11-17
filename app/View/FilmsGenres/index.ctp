<div class="filmsGenres index">
	<h2><?php echo __('Films Genres');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('genre_id');?></th>
			<th><?php echo $this->Paginator->sort('film_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($filmsGenres as $filmsGenre): ?>
	<tr>
		<td><?php echo h($filmsGenre['FilmsGenre']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($filmsGenre['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $filmsGenre['Genre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($filmsGenre['Film']['id'], array('controller' => 'films', 'action' => 'view', $filmsGenre['Film']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $filmsGenre['FilmsGenre']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $filmsGenre['FilmsGenre']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $filmsGenre['FilmsGenre']['id']), null, __('Are you sure you want to delete # %s?', $filmsGenre['FilmsGenre']['id'])); ?>
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
