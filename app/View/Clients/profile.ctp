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
				<td><?php echo $this->Form->input('country_id', array('label' => 'Kraj', 'values' => $hires['Country']['name'], 'selected'=>$countr_id)); ?>
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
			<th><?php echo __('Status'); ?></th>
			<th class="actions"><?php echo __('');?></th>
		</tr>
		<?php 
		for($i=0; $i < count($hire); $i++) {
		$l++; ?>
		<tr>
			<td><?php echo $l;?></td>
			<td><?php $zam=$hire[$i]['hires']['expiry_date']; echo date('Y-m-d', strtotime("$zam-7days"));?>
			</td>
			<td><?php echo $zam; ?>
			</td>
			<td><?php echo $hire[$i]['f']['polish_title'].' (oryg. '.$this->Html->link(__($hire[$i]['f']['original_title'].', '.$hire[$i]['f']['production_year']), array('controller' => 'films', 'action' => 'view', $hire[$i]['f']['id'])).')';?>
			</td>
			<td class="actions"><?php  echo (date("Y-m-d")<=$hire[$i]['hires']['expiry_date'] and $hire[$i]['hires']['status']=='aktywny') ? $this->Form->postLink(__('oglądaj'), array('controller' => 'hires', 'action' => 'play', $hire[$i]['hires']['id']),
	 null, __('Na pewno chcesz zobaczyc film?', $hire[$i]['hires']['id'])) : 'nieaktywny'; ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php endif; ?>
	

</div>
