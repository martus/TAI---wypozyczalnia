<div class="clients form">
<?php echo '<h1>Mój Profil</h1>'; ?>
<?php echo $this->Form->create('Client');?>
		
		<table>
			<tr>
				<td><?php echo $this->Form->input('name', array('label' => 'Imie', 'value' => $hires['Client']['name'])); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('surname', array('label' => 'Nazwisko', 'value' => $hires['Client']['surname'])); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('id_card_number', array('label' => 'Numer Dowodu', 'value' => $hires['Client']['id_card_number'])); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('city', array('label' => 'Miasto', 'value' => $hires['Client']['city'])); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('street', array('label' => 'Ulica', 'value' => $hires['Client']['street'])); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('post_code', array('label' => 'Kod pocztowy', 'value' => $hires['Client']['post_code'])); ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('country_id', array('label' => 'Kraj', 'value' => $hires['Country']['name'])); ?>
				</td>
			</tr>

		</table>
	<?php echo $this->Form->end(__('Edytuj profil'));?>
</div>

<div class="related">
	<?php echo '<h2>Moje wypożyczenia</h2>';?>

	<?php $l = 0; ?>
	<?php if (!empty($hires['Hire'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo __('lp.'); ?></th>
			<th><?php echo __('Data zamówienia'); ?></th>
			<th><?php echo __('Data ważności'); ?></th>
			<th><?php //echo __('Id filmu'); ?></th>
			<th><?php echo __('Tytul'); ?></th>
			<th class="actions"><?php echo __('');?></th>
		</tr>
		<?php
		foreach ($hires['Hire'] as $hire): ?>
		<?php $l++;?>
		<tr>
			<td><?php echo $l;?></td>
			<td><?php $zam=$hire['expiry_date']; echo date('Y-m-d', strtotime("$zam-7days"));?>
			</td>
			<td><?php echo $zam; ?>
			</td>
			<td><?php //echo $hire['film_id'];?></td>
			<td><?php echo $hire['Film']['polish_title'].' (oryg. '.$this->Html->link(__($hire['Film']['original_title'].', '.$hire['Film']['production_year']), array('controller' => 'films', 'action' => 'view', $hire['Film']['id'])).')';?>
			</td>
			<td class="actions"><?php //echo (date("Y-m-d")==$hire['hires']['expiry_date']) ? 	 $this->Form->postLink(__('zrezygnuj'), array('controller' => 'hires', 'action' => 'delete', $hire['hires']['id']),
		// null, __('Na pewno chcesz zrezygnować z rezerwacji nr # %s?', $hire['hires']['id'])) : ''; ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

</div>
