<?php 
if($session->read('Auth.User.group_id')!='5' && $session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='2' && $session->read('Auth.User.group_id')!='7')
{
$this->requestAction('/users/logout/', array('return'));
}
?>
<div class="projects view" style="position: center">
<h2><?php  __('Project');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['project_name']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Hours'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['total_ hours']; ?>
			&nbsp;
		</dd>


		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['project_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['project_code']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assigned By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
		echo $project['Project']['assigned_to']; ?>
			&nbsp;
		</dd>

		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Action Steps'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['action_steps']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $project['Project']['comments']; ?>
			&nbsp;
		</dd>
			<?php if($session->read('Auth.User.group_id')!='6' && $session->read('Auth.User.group_id')!='7'){ ?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['start_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['end_date']; ?>
			&nbsp;
		</dd>
		<?php } ?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Actual Start Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['actual_start_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Actual  End Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $project['Project']['actual_end_date']; ?>
			&nbsp;
		</dd>
</div>

<div class="actions" style="position:left">
	<h3><?php __('Actions'); ?></h3>
	<ul>
<?php if($session->read('Auth.User.group_id')=='1') {

?>
<li><?php echo $this->Html->link(__('Edit Project', true), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Project', true), array('action' => 'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Assign this project', true), array('action' => 'edit', $project['Project']['id']));  ?> </li>

<?php

//echo $this->Html->link($project['User']['username'], array('controller' => 'users', 'action' => 'view', $project['User']['id']));
}
elseif($session->read('Auth.User.group_id')=='2')
 {
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Edit Project', true), array('action' => 'edit', $project['Project']['id'])); ?> </li>
<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Assign this project', true), array('action' => 'edit', $project['Project']['id']));  ?> </li>
<?php
}
elseif($session->read('Auth.User.group_id')=='4')
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Edit Project', true), array('action' => 'edit', $project['Project']['id'])); ?> </li>
<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
<?php
}
elseif($session->read('Auth.User.group_id')=='5')
{
?>
<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('Edit Project', true), array('action' => 'edit', $project['Project']['id'])); ?> </li>
<?php
}
else
{
?>

<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index')); ?> </li>
<?php } ?>
			</ul>
</div>