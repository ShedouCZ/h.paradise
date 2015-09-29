<div class="roomTypes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Room Type'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Room Type'), array('action' => 'edit', $roomType['RoomType']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Room Type'), array('action' => 'delete', $roomType['RoomType']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $roomType['RoomType']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Room Types'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Room Type'), array('action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Reservations'), array('controller' => 'reservations', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Reservation'), array('controller' => 'reservations', 'action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($roomType['RoomType']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Room Type'); ?></th>
						<td>
							<?php echo h($roomType['RoomType']['room_type']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Price Night'); ?></th>
						<td>
							<?php echo h($roomType['RoomType']['price_night']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Price Person'); ?></th>
						<td>
							<?php echo h($roomType['RoomType']['price_person']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Reservations'); ?></h3>
	<?php if (!empty($roomType['Reservation'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('E-mail'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Room Type Id'); ?></th>
		<th><?php echo __('Adults'); ?></th>
		<th><?php echo __('Kids'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($roomType['Reservation'] as $reservation): ?>
		<tr>
			<td><?php echo $reservation['id']; ?></td>
			<td><?php echo $reservation['name']; ?></td>
			<td><?php echo $reservation['e-mail']; ?></td>
			<td><?php echo $reservation['phone']; ?></td>
			<td><?php echo $reservation['from']; ?></td>
			<td><?php echo $reservation['to']; ?></td>
			<td><?php echo $reservation['room_type_id']; ?></td>
			<td><?php echo $reservation['adults']; ?></td>
			<td><?php echo $reservation['kids']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'reservations', 'action' => 'view', $reservation['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'reservations', 'action' => 'edit', $reservation['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'reservations', 'action' => 'delete', $reservation['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reservation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Reservation'), array('controller' => 'reservations', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>	</div>
	</div><!-- end col md 12 -->
</div>
