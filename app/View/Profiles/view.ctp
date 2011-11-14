<div class="clients view">
<h2><?php  echo __('Profil użytkownika');?></h2>
	<dl>
		<dt><?php echo __('Imie'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwisko'); ?></dt>
		<dd>
			<?php echo h($client['Client']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numer dowodu'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id_card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miasto'); ?></dt>
		<dd>
			<?php echo h($client['Client']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($client['Client']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kod pocztowy'); ?></dt>
		<dd>
			<?php echo h($client['Client']['post_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kraj'); ?></dt>
		<dd>
			<?php echo h($client['Country']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Akcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edytuj profil'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Moje wypożyczenia');?></h3>
	<?php if (!empty($clien)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Numer zamówienia'); ?></th>
		<th><?php echo __('Data odbioru'); ?></th>
		<th><?php echo __('Data oddania'); ?></th>
		<th><?php echo __('Id płyty'); ?></th>
		<th class="actions"><?php echo __('');?></th>
	</tr>
	<?php
		$i = 0;
print_r($clien);
		foreach ($clien as $hire): ?>
		<tr>
			<td><?php echo $hire['hires']['id'];?></td>
			<td><?php echo $hire['hires']['start_date'];?></td>
			<td><?php echo $hire['hires']['end_date'];?></td>
			<td><?php echo $hire['hires']['copy_id'];?></td>
			<td class="actions">
				<?php echo (date("YYYY-mm-dd")==$hire['hires']['start_date']) ?	 $this->Html->link(__('Zrezygnuj'), array('controller' => 'hires', 'action' => 'undo', $hire['id'])) : ""; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
