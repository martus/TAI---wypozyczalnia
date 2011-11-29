<p>Sortowanie: <?php echo $this->Paginator->sort('id');?> | <?php echo $this->Paginator->sort('original_title');?> | <?php echo $this->Paginator->sort('polish_title');?> | <?php echo $this->Paginator->sort('production_year');?> | <?php echo $this->Paginator->sort('film_type_id');?></p>

	<?php foreach ($films as $film): ?>
	<div class="film">
		<?php //echo h($film['Film']['id']); ?>
		<?php //echo h($film['Film']['original_title']); ?>
		
		<?php $filename = "/git/TAI---wypozyczalnia/app/webroot/img/film".$film['Film']['id'].".jpg";    
		$imgSrc = !file_exists($filename) ? $filename : "/git/TAI---wypozyczalnia/app/webroot/img/default-video.jpg"; 
		echo '<img src="'.$imgSrc.'" alt="default" />';?>
	
		<?php echo $this->Html->link($film['Film']['polish_title'], array('controller' => 'films', 'action' => 'view', $film['Film']['id'])); ?>
	</div>
	<?php endforeach; ?>
	<p class="paging_legend">
	<?php
	//echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo "<span class='paging_numbers'>";
		echo $this->Paginator->numbers(array('separator' => ' | '));
		echo "</span>";
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
