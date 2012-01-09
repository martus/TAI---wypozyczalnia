<div class="films view">
<h2><?php  echo __('Film');?></h2> 
<h3><?php echo $this->Html->link('Dodaj do koszyka!',
	 array('controller' => 'carts', 'action' => 'add_to_cart', $film['Film']['id'])); ?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($film['Film']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Title'); ?></dt>
		<dd>
			<?php echo h($film['Film']['original_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Polish Title'); ?></dt>
		<dd>
			<?php echo h($film['Film']['polish_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Production Year'); ?></dt>
		<dd>
			<?php echo h($film['Film']['production_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($film['FilmType']['id'], array('controller' => 'film_types', 'action' => 'view', $film['FilmType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
		<?php $filename = "$this->base/app/webroot/img/film".$film['Film']['id'].".jpg";    
		$imgSrc = !file_exists($filename) ? $filename : "$this->base/app/webroot/img/default-video.jpg"; 
		echo '<img src="'.$imgSrc.'" alt="default" />';?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Film'), array('action' => 'edit', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Film'), array('action' => 'delete', $film['Film']['id']), null, __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Copies');?></h3>
	<?php if (!empty($film['Copy'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Film Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($film['Copy'] as $copy): ?>
		<tr>
			<td><?php echo $copy['id'];?></td>
			<td><?php echo $copy['film_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'copies', 'action' => 'view', $copy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'copies', 'action' => 'edit', $copy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'copies', 'action' => 'delete', $copy['id']), null, __('Are you sure you want to delete # %s?', $copy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Countries');?></h3>
	<?php if (!empty($film['Country'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($film['Country'] as $country): ?>
		<tr>
			<td><?php echo $country['id'];?></td>
			<td><?php echo $country['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'countries', 'action' => 'view', $country['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'countries', 'action' => 'edit', $country['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'countries', 'action' => 'delete', $country['id']), null, __('Are you sure you want to delete # %s?', $country['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Genres');?></h3>
	<?php if (!empty($film['Genre'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($film['Genre'] as $genre): ?>
		<tr>
			<td><?php echo $genre['id'];?></td>
			<td><?php echo $genre['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'genres', 'action' => 'view', $genre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'genres', 'action' => 'edit', $genre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'genres', 'action' => 'delete', $genre['id']), null, __('Are you sure you want to delete # %s?', $genre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related People');?></h3>
	<?php if (!empty($film['Person'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($film['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id'];?></td>
			<td><?php echo $person['name'];?></td>
			<td><?php echo $person['surname'];?></td>
			<td><?php echo $person['country_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), null, __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
