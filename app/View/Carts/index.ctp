<?php
echo '<h1> Koszyk </h1>';
$suma = 0;

?>
<?php if (!empty($carts)) { ?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>film &nbsp;</th>
		<th>typ filmu&nbsp;</th>
		<th>koszt&nbsp;</th>
		<th class="actions"><?php echo ''; ?></th>
	</tr>
	<?php foreach ($carts as $c): ?>
	<?php $suma= $suma + $c['cost_per_day'];?>
	<tr>

		<td><?php echo $this->Html->link($c['polish_title'], array('controller' => 'films', 'action' => 'view', $c['id'])); ?>
		</td>
		<td><?php echo $c['type']; ?>&nbsp;</td>
		<td><?php echo $c['cost_per_day'].' zł'; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Usuń'), array('action' => 'delete', $c['id']), null, __('Na pewno chcesz usunąć film z koszyka?', $c['polish_title'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	
	<tr><td>
<?php 
echo 'Suma kosztów: '.$suma.' zł</td></tr>';
echo '<tr><td>Filmów w koszyku: '.count($carts).'';
?>
	 </td></tr>
</table>
<br/>
	<?php echo $this->Html->link(__('Zamów'), array('action' => 'add_hire'));?>
	<?php } else {
		echo 'Twój koszyk jest pusty.<br/>';
	}?>
