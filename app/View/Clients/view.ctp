<div class="clients view">
<h2><?php  echo __('Client');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($client['Client']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Card Number'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id_card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($client['Client']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($client['Client']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Code'); ?></dt>
		<dd>
			<?php echo h($client['Client']['post_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Country']['name'], array('controller' => 'countries', 'action' => 'view', $client['Country']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hires'), array('controller' => 'hires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hire'), array('controller' => 'hires', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hires');?></h3>
	<?php if (!empty($client['Hire'])):?>
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
		foreach ($client['Hire'] as $hire): ?>
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
