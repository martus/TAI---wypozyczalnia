
<div id="side_menu">
	<div id="categories">

		<h3>Gatunki filmowe</h3>
		<ul>
		<?php for($i=0; $i<count($items); $i++) { ?>
			<li><?php echo $items[$i]['genres']['name'];?>
			<?php echo $items[$i][0]['ilosc']!=0 ? ' ('.$this->Html->link($items[$i][0]['ilosc'],
			 array('controller' => 'films', 'action' => 'film_genres', $items[$i]['genres']['id'])).')' :
			  '(0)' ?> 
			
			</li>
			<?php }?>
		</ul>

	</div>
</div>
