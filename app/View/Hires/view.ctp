<div class="hires view">
<h2><?php  echo __('Hire');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hire['Hire']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($hire['Hire']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($hire['Hire']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hire['Client']['name'], array('controller' => 'clients', 'action' => 'view', $hire['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hire['Copy']['id'], array('controller' => 'copies', 'action' => 'view', $hire['Copy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hire'), array('action' => 'edit', $hire['Hire']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hire'), array('action' => 'delete', $hire['Hire']['id']), null, __('Are you sure you want to delete # %s?', $hire['Hire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hires'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hire'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
	</ul>
</div>
