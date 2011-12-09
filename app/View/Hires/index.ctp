<div class="hires index">
	<h2><?php echo __('Hires'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('expiry_date');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('film_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php //debug($hires);
	$i = 0;
	foreach ($hires as $hire): ?>
	<tr>
		<td><?php echo h($hire['Hire']['id']); ?>&nbsp;</td>
		<td><?php echo h($hire['Hire']['expiry_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hire['User']['id'], array('controller' => 'users', 'action' => 'view', $hire['User']['id'])); ?>&nbsp;
		</td>
		<td>
			<?php echo $this->Html->link($hire['Film']['id'], array('controller' => 'films', 'action' => 'view', $hire['Film']['id'])); ?>
		</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $hire['Hire']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $hire['Hire']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hire['Hire']['id']), null, __('Are you sure you want to delete # %s?', $hire['Hire']['id'])); ?>
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
