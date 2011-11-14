<div class="copies view">
<h2><?php  echo __('Copy');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($copy['Copy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film'); ?></dt>
		<dd>
			<?php echo $this->Html->link($copy['Film']['id'], array('controller' => 'films', 'action' => 'view', $copy['Film']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Copy'), array('action' => 'edit', $copy['Copy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Copy'), array('action' => 'delete', $copy['Copy']['id']), null, __('Are you sure you want to delete # %s?', $copy['Copy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hires'), array('controller' => 'hires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hire'), array('controller' => 'hires', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hires');?></h3>
	<?php if (!empty($copy['Hire'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Copy Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($copy['Hire'] as $hire): ?>
		<tr>
			<td><?php echo $hire['id'];?></td>
			<td><?php echo $hire['start_date'];?></td>
			<td><?php echo $hire['end_date'];?></td>
			<td><?php echo $hire['client_id'];?></td>
			<td><?php echo $hire['copy_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hires', 'action' => 'view', $hire['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hires', 'action' => 'edit', $hire['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hires', 'action' => 'delete', $hire['id']), null, __('Are you sure you want to delete # %s?', $hire['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hire'), array('controller' => 'hires', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
