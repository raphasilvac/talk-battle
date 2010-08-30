<div class="battles form">
<?php echo $this->Form->create('Battle');?>
	<fieldset>
 		<legend><?php __('Add Battle'); ?></legend>
	<?php
		echo $this->Form->input('left');
		echo $this->Form->input('right');
		echo $this->Form->input('winner');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Battles', true), array('action' => 'index'));?></li>
	</ul>
</div>