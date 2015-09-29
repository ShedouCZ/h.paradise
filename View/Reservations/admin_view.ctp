<div class="reservations view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Reservation'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Reservation'), array('action' => 'delete', $reservation['Reservation']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reservation['Reservation']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Reservations'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Reservation'), array('action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Room Types'), array('controller' => 'room_types', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Room Type'), array('controller' => 'room_types', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Name'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['name']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('E-mail'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['e-mail']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Phone'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['phone']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('From'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['from']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('To'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['to']); ?>
						</td>
					</tr>
					<tr>
								<th><?php echo __('Room Type'); ?></th>
								<td>
			<?php echo $this->Html->link($reservation['RoomType']['id'], array('controller' => 'room_types', 'action' => 'view', $reservation['RoomType']['id'])); ?>
			&nbsp;
		</td>
					</tr>
					<tr>
						<th><?php echo __('Adults'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['adults']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Kids'); ?></th>
						<td>
							<?php echo h($reservation['Reservation']['kids']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

