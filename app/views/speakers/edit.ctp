<div class="speakers form">
<?php echo $this->Form->create('Speaker');?>
	<fieldset>
 		<legend><?php __('Edit Speaker'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Speaker.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Speaker.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Speakers', true), array('action' => 'index'));?></li>
	</ul>
</div>