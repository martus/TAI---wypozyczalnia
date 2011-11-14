<div class="genres view">
<h2><?php  echo __('Genre');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Genre'), array('action' => 'edit', $genre['Genre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Genre'), array('action' => 'delete', $genre['Genre']['id']), null, __('Are you sure you want to delete # %s?', $genre['Genre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Films');?></h3>
	<?php if (!empty($genre['Film'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Original Title'); ?></th>
		<th><?php echo __('Polish Title'); ?></th>
		<th><?php echo __('Production Year'); ?></th>
		<th><?php echo __('Film Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($genre['Film'] as $film): ?>
		<tr>
			<td><?php echo $film['id'];?></td>
			<td><?php echo $film['original_title'];?></td>
			<td><?php echo $film['polish_title'];?></td>
			<td><?php echo $film['production_year'];?></td>
			<td><?php echo $film['film_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'films', 'action' => 'view', $film['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'films', 'action' => 'edit', $film['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'films', 'action' => 'delete', $film['id']), null, __('Are you sure you want to delete # %s?', $film['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
