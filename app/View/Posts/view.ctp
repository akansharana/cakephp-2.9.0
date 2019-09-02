<div class="posts view">
	<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php $post ='';
			echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('email'); ?></dt>
		<dd>
			<?php echo h($post['Post']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('password'); ?></dt>
		<dd>
			<?php echo h($post['Post']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('phone'); ?></dt>
		<dd>
			<?php echo h($post['Post']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
	</ul>
</div>
