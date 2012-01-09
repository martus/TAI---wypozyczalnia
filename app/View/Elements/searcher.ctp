<form action="<?php echo $this->base ?>/searches/simple_search"
	id="SearchForm" method="get" accept-charset="utf-8">
	<input name="value" value="" type="text" id="value" /> 
	<input type="submit" value="Szukaj" />
</form>
<div id="advanced_search">
<?php echo $this->Html->link('+ zaawansowane szukanie',array('controller' => 'searches', 'action' => 'advanced_search'), array()); ?>
</div>