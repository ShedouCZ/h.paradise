<?php
App::uses('AppController', 'Controller');
class ReservationsController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');

	// declare public actions
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'), 'default', array('class' => 'alert alert-success'));
				header("Location: /domu"); /* Redirect browser */
				exit();
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$roomTypes = $this->Reservation->RoomType->find('list');
		$this->set(compact('roomTypes'));
	}

	public function admin_index() {
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
		$this->set('reservation', $this->Reservation->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$roomTypes = $this->Reservation->RoomType->find('list');
		$this->set(compact('roomTypes'));
	}

	public function admin_edit($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
			$this->request->data = $this->Reservation->find('first', $options);
		}
		$roomTypes = $this->Reservation->RoomType->find('list');
		$this->set(compact('roomTypes'));
	}

	public function admin_delete($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reservation->delete()) {
			$this->Session->setFlash(__('The reservation has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The reservation could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
