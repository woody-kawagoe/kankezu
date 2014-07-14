<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Normalize CSS: UI tests</title>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" href="normalize.css">
<style>
  /*! suit-test v0.1.0 | MIT License | github.com/suitcss */

  .Test {
    background: #fff;
    counter-reset: test-describe;
  }

  .Test-describe:before {
    content: counter(test-describe);
    counter-increment: test-describe;
  }

  .Test-describe {
    counter-reset: test-it;
  }

  .Test-it:before {
    content: counter(test-describe) "." counter(test-it);
    counter-increment: test-it;
  }

  .Test-title {
    font-size: 2em;
    font-family: sans-serif;
    padding: 20px;
    margin: 20px 0;
    background: #eee;
    color: #999;
  }

  .Test-describe,
  .Test-it {
    background: #eee;
    border-left: 5px solid #666;
    color: #666;
    font-family: sans-serif;
    font-weight: bold;
    margin: 20px 0;
    padding: 0.75em 20px;
  }

  .Test-describe {
    font-size: 1.5em;
    margin: 60px 0 20px;
  }

  .Test-describe:before,
  .Test-it:before {
    color: #999;
    display: inline-block;
    margin-right: 10px;
    min-width: 30px;
    text-transform: uppercase;
  }

  /* Custom helpers */

  /**
   * Test whether the body's margin has been removed
   */

  body {
    background: white;
  }

  /**
   * Highlight the bounds of direct children of a test block
   */

  .Test-run--highlightEl > * {
    outline: 1px solid #ADD8E6;
  }
</style>

<div class="nodes">
	<h1 class="Test-title">つぶやき関係図</h1>
	<h2 class="Test-describe"><?php echo __('Nodes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cfrom'); ?></th>
			<th><?php echo $this->Paginator->sort('cto'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nodes as $node): ?>
	<tr>
		<td><?php echo h($node['Node']['id']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['cfrom']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['cto']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['comment']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['created']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $node['Node']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $node['Node']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $node['Node']['id']), null, __('Are you sure you want to delete # %s?', $node['Node']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3 class="Test-describe"><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Node'), array('action' => 'add')); ?></li>
	</ul>
</div>
