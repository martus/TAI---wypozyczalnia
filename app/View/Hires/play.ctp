<div class="hires_play">
	<h2>
	<?php echo __('Film '); echo $mov['polish_title'];?>
	</h2>
	<h5><?php echo '(oryg. '.$mov['original_title'].' '.$mov['production_year'].')'?></h5>

	
	<iframe width="640" height="480"
		src=<?php echo $film_src;?> frameborder="1"
		allowfullscreen></iframe>

	<h4>Opis filmu</h4>
	<div id="film_description">
		<?php echo $mov['description'];?>
	</div>
	


</div>
