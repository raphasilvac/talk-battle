<div class="talks form">
<?php echo $this->Form->create('Talk');?>
	<fieldset>
 		<legend><?php __('Edit Talk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('speaker_id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Talk.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Talk.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Talks', true), array('action' => 'index'));?></li>
	</ul>
</div>