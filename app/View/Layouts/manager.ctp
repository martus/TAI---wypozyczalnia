<!DOCTYPE html>
<html lang="pl">
<head>
<title>Panel administracyjny - Wypożyczalnia filmów | <?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
<?php echo $this->Html->css('styles'); ?>
</head>
<body>
<div id="wrapper">
<header>
	<?php echo $this->Html->image('/img/wyp_logo.png', array('alt'=>'Kinomaniak', 'url'=>array('controller' => 'films', 'action' => 'index'))); ?>
	<nav class="user_menu">
		<ul>
			<li>Koszyk</li>
			<li><?php echo $this->Html->link('Wyloguj',array('controller' => 'users', 'action' => 'logout'), array()); ?></li>
		</ul>
	</nav>
	<form action="" method="get">
		<input type="text" value="wprowadź szukaną frazę"/>
		<input type="submit" value="Szukaj" />		
	</form>
	
</header>
<div id="main">
	<div id="side_menu">
		<div id="categories">
			<h2>Kategorie</h2>
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
		<div id="admin_menu">
		<h2>Menu administracyjne</h2>
			<ul>
				<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films','action' => 'add')); ?></li>
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
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<!-- Here's where I want my views to be displayed -->
	<div id="content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $content_for_layout ?>
	</div>
</div>

<!-- Add a footer to each displayed page -->
<footer>
	<p>Created by Marta Zagańczyk & Wojciech Ziółek</p>
</footer>
</div>
</body>
</html>