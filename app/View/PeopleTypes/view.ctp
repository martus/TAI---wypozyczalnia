<div class="peopleTypes view">
<h2><?php  echo __('People Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peopleType['PeopleType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($peopleType['PeopleType']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit People Type'), array('action' => 'edit', $peopleType['PeopleType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete People Type'), array('action' => 'delete', $peopleType['PeopleType']['id']), null, __('Are you sure you want to delete # %s?', $peopleType['PeopleType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
