<div class="reservations index">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;' . __('New Reservation'), array('action' => 'add'), array('escape' => false)); ?></li>
				</ul>
				<h1><?php echo __('Reservations'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('e-mail'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<th><?php echo $this->Paginator->sort('from'); ?></th>
						<th><?php echo $this->Paginator->sort('to'); ?></th>
						<th><?php echo $this->Paginator->sort('room_type_id'); ?></th>
						<th><?php echo $this->Paginator->sort('adults'); ?></th>
						<th><?php echo $this->Paginator->sort('kids'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($reservations as $reservation) { ?>
					<tr>
						<td><?php echo h($reservation['Reservation']['name']); ?></td>
						<td><?php echo h($reservation['Reservation']['e-mail']); ?></td>
						<td><?php echo h($reservation['Reservation']['phone']); ?></td>
						<td><?php echo h($reservation['Reservation']['from']); ?></td>
						<td><?php echo h($reservation['Reservation']['to']); ?></td>
								<td>
			<?php echo $this->Html->link($reservation['RoomType']['id'], array('controller' => 'room_types', 'action' => 'view', $reservation['RoomType']['id'])); ?>
		</td>
						<td><?php echo h($reservation['Reservation']['adults']); ?></td>
						<td><?php echo h($reservation['Reservation']['kids']); ?></td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $reservation['Reservation']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $reservation['Reservation']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reservation['Reservation']['id'])); ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div>
