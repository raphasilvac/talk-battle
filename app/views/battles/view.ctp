<div class="battles view">
<h2><?php  __('Battle');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $battle['Battle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Left'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $battle['Battle']['left']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Right'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $battle['Battle']['right']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winner'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $battle['Battle']['winner']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $battle['Battle']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $battle['Battle']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Battle', true), array('action' => 'edit', $battle['Battle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Battle', true), array('action' => 'delete', $battle['Battle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $battle['Battle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Battles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Battle', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
