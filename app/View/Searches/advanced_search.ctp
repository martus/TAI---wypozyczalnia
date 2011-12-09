<?php
echo '<h1>Zaawansowane szukanie</h1>';

?>

<?php echo $this->Form->create(''); ?>
	<?php echo $this->Form->input('Film.polish_title', array('label' => 'Tytuł filmu', 'value' => '', 'type' => 'text')); ?>
	<?php echo $this->Form->input('Genre.name', array('label' => 'Gatunek filmowy', 'value' => '', 'type' => 'text')); ?>
	<?php echo $this->Form->input('Person.name', array('label' => 'Reżyser', 'value' => '', 'type' => 'text')); ?>
	<?php echo $this->Form->input('Film.production_year', array('label' => 'Rok produkcji', 'value' => '', 'type' => 'text')); ?>	
	<?php echo $this->Form->end('szukaj');?>


<?php if(!empty($films)) { ?>
<?php echo '<h1>Wyniki wyszukiwania</h1>'; ?>
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
		<td><?php echo $f['Film']['polish_title'].'(oryg. '.$f['Film']['original_title'].')'; ?>
		</td>
		<td><?php echo $f['Country'][0]['name']; ?></td>
		<td><?php echo $f['Person'][0]['name'].' '.$f['Person'][0]['surname']; ?></td>
		<td><?php echo $f['Genre'][0]['name']; ?></td>
		<td><?php echo $f['Film']['production_year']; ?></td>

	</tr>
	<?php }?>
	<?php endforeach; ?>
</table>

	<?php } elseif(!empty($ex)) {
		echo '<h1>Wyniki wyszukiwania</h1>'; 
		echo 'brak wyników';
	}?>