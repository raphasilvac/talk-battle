<div class="speakers view">
<h2><?php  __('Speaker');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $speaker['Speaker']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $speaker['Speaker']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $speaker['Speaker']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $speaker['Speaker']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Speaker', true), array('action' => 'edit', $speaker['Speaker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Speaker', true), array('action' => 'delete', $speaker['Speaker']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $speaker['Speaker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Speakers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Speaker', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
