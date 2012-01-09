<?php
echo '<h1>Wyniki wyszukiwania</h1>';

?>

<?php if(!empty($films)) {?>
<table>
	<tr>
		<th>Id</th>
		<th>Tytuł filmu</th>
		<th>Kraj</th>
		<th>Reżyser</th>
		<th>Gatunek fimowy</th>
		<th>Rok produkcji</th>
	</tr>
	<?php foreach ($films as $f): ?>
	<?php if(!empty($f)) {?>
	<tr>
		<td><?php echo $f['Film']['id']; ?></td>
		<td><?php echo $this->Html->link($f['Film']['polish_title'], array('controller' => 'films', 'action' => 'view', $f['Film']['id'])) .' (oryg. '.$f['Film']['original_title'].')'; ?>
		</td>
		<td><?php echo $f['Country'][0]['name']; ?></td>
		<td><?php echo $f['Person'][0]['name'].' '.$f['Person'][0]['surname']; ?>
		</td>
		<td><?php echo $f['Genre'][0]['name']; ?></td>
		<td><?php echo $f['Film']['production_year']; ?></td>

	</tr>
	<?php }?>
	<?php endforeach; ?>
</table>

	<?php } else {
		echo 'brak wyników';
	}?>
