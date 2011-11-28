<!DOCTYPE html>
<html lang="pl">
<head>
<title>Panel administracyjny - Wypożyczalnia filmów | <?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
<?php echo $this->Html->css('styles'); ?>
<?php echo $this->Html->css('admin_styles'); ?>
</head>
<body>
<div id="wrapper">
<header>
	<?php echo $this->Html->image('/img/wyp_logo.png', array('alt'=>'Kinomaniak', 'url'=>array('controller' => 'films', 'action' => 'index'))); ?>
	<nav class="user_menu">
		<ul>
			<li><?php echo $this->Html->link('Wyloguj',array('controller' => 'users', 'action' => 'logout'), array()); ?></li>
		</ul>
	</nav>
	<?php echo $this->element('searcher'); ?>
	
</header>
<div id="main">
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