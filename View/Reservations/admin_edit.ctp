<div class="reservations form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete'), array('action'=>'delete', $this->Form->value('Reservation.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Reservation.id'))); ?></li>
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Reservations'), array('action'=>'index'), array('escape'=>false)); ?></li>
				</ul>
				<h1><?php echo __('Admin Edit Reservation'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Reservation', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class'=>'form-control', 'placeholder'=>__('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('e-mail', array('class'=>'form-control', 'placeholder'=>__('E-mail')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class'=>'form-control', 'placeholder'=>__('Phone')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('from', array('class'=>'form-control', 'placeholder'=>__('From')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('to', array('class'=>'form-control', 'placeholder'=>__('To')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('room_type_id', array('class'=>'form-control', 'placeholder'=>__('Room Type Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('adults', array('class'=>'form-control', 'placeholder'=>__('Adults')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('kids', array('class'=>'form-control', 'placeholder'=>__('Kids')));?>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
					</div>

				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
