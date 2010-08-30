<div class="talks view">
<h2><?php  __('Talk');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $talk['Talk']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $talk['Talk']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Speaker Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $talk['Talk']['speaker_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $talk['Talk']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $talk['Talk']['updated']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $talk['Talk']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Talk', true), array('action' => 'edit', $talk['Talk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Talk', true), array('action' => 'delete', $talk['Talk']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $talk['Talk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Talks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talk', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
