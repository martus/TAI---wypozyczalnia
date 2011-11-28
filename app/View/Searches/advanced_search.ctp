<?php
echo '<h1>Zaawansowane szukanie</h1>';

?>
<form action="/git/TAI---wypozyczalnia/searches/advanced_search"
	id="SearchForm" method="post" accept-charset="utf-8">

	Tytuł filmu <input name="tytul" value="" type="text" id="tyt" /> <br />
	Gatunek <input name="gatunek" value="" type="text" id="gat" /> <br />
	Reżyser <input name="rezyser" value="" type="text" id="rez" /> <br />
	Rok produkcji <input name="rok_wydania" value="" type="text" id="rok" />
	<br /> <input type="submit" value="Szukaj" />
</form>

<?php if(!empty($films)) {?>
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

	<?php } else {
		//echo 'brak wyników';
	}?>