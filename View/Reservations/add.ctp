<div class="reservations form">

	<div class="masthead">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/domu">Hotel Paradise</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="/domu">Domů</a></li>
						<li><a href="/o-nas">O nás</a></li>
						<li><a href="/cenik">Ceník</a></li>
						<li class="active"><a href="/rezervace">Rezervace</a></li>
						<li><a href="/kontakt">Kontakt</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="/rezervace">Čeština</a></li>
						<li><a href="/rezervation" style="margin-right: 50px;">English</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="jumbotron">

		<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create('Reservation', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('e-mail', array('class'=>'form-control', 'placeholder'=>__('E-mail')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class'=>'form-control', 'placeholder'=>__('Phone')));?>
				</div>
				<div class="form-group ">
					<?php echo $this->Form->input('from', array('class'=>'date form-control', 'placeholder'=>__('From')));?>
				</div>
				<div class="form-group ">
					<?php echo $this->Form->input('to', array('class'=>'date form-control', 'placeholder'=>__('To')));?>
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
</div>
