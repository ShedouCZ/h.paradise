<?php
App::uses('AppModel', 'Model');

class Reservation extends AppModel {
	public $useTable = 'reservation';

	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'RoomType' => array(
			'className' => 'RoomType',
			'foreignKey' => 'room_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
