<?php
App::uses('AppModel', 'Model');

class RoomType extends AppModel {
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'Reservation' => array(
			'className' => 'Reservation',
			'foreignKey' => 'room_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
