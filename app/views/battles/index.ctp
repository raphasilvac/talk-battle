<div class="battles index">
	<h2><?php __('Battles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('left');?></th>
			<th><?php echo $this->Paginator->sort('right');?></th>
			<th><?php echo $this->Paginator->sort('winner');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($battles as $battle):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $battle['Battle']['id']; ?>&nbsp;</td>
		<td><?php echo $battle['Battle']['left']; ?>&nbsp;</td>
		<td><?php echo $battle['Battle']['right']; ?>&nbsp;</td>
		<td><?php echo $battle['Battle']['winner']; ?>&nbsp;</td>
		<td><?php echo $battle['Battle']['created']; ?>&nbsp;</td>
		<td><?php echo $battle['Battle']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $battle['Battle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $battle['Battle']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $battle['Battle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $battle['Battle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Battle', true), array('action' => 'add')); ?></li>
	</ul>
</div>