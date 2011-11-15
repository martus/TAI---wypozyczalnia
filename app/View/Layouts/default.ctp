<!DOCTYPE html>
<html lang="pl">
<head>
<title>Wypożyczalnia filmów | <?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
<?php echo $this->Html->css('styles'); ?>
</head>
<body>
<header>
	<img src="img/wyp_logo.png" />
	<form action="" method="get">
		<input type="text" value="wprowadź szukaną frazę"/>
		<input type="submit" value="Szukaj" />		
	</form>
	<nav class="user_menu">
		<ul>
			<li>Koszyk</li>
			<li>Profil</li>
			<li>Zaloguj</li>
		</ul>
	</nav>
</header>
<div id="categories_menu">
	<ul>
		<li>
			Kategoria 1
			<ul>
				<li>Subkategoria 1</li>
				<li>Subkategoria 2</li>
			</ul>
		</li>
		<li>
			Kategoria 2
			<ul>
				<li>Subkategoria 1</li>
				<li>Subkategoria 2</li>
			</ul>
		</li>
	</ul>
</div>
<!-- Here's where I want my views to be displayed -->
<div id="content">
<?php echo $content_for_layout ?>
</div>

<!-- Add a footer to each displayed page -->
<footer>
	<p>Created by Marta Zagańczyk & Wojciech Ziółek</p>
</footer>

</body>
</html>