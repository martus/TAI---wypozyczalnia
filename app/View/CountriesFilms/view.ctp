<div class="countriesFilms view">
<h2><?php  echo __('Countries Film');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($countriesFilm['CountriesFilm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($countriesFilm['Country']['name'], array('controller' => 'countries', 'action' => 'view', $countriesFilm['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film'); ?></dt>
		<dd>
			<?php echo $this->Html->link($countriesFilm['Film']['id'], array('controller' => 'films', 'action' => 'view', $countriesFilm['Film']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Countries Film'), array('action' => 'edit', $countriesFilm['CountriesFilm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Countries Film'), array('action' => 'delete', $countriesFilm['CountriesFilm']['id']), null, __('Are you sure you want to delete # %s?', $countriesFilm['CountriesFilm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries Films'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries Film'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
