<div class="battles form">
<?php echo $this->Form->create('Battle');?>
	<fieldset>
 		<legend><?php __('Edit Battle'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Battle.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Battle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Battles', true), array('action' => 'index'));?></li>
	</ul>
</div>