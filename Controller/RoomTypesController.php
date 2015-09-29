<?php
App::uses('AppController', 'Controller');
class RoomTypesController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');


	public function admin_index() {
		$this->RoomType->recursive = 0;
		$this->set('roomTypes', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->RoomType->exists($id)) {
			throw new NotFoundException(__('Invalid room type'));
		}
		$options = array('conditions' => array('RoomType.' . $this->RoomType->primaryKey => $id));
		$this->set('roomType', $this->RoomType->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RoomType->create();
			if ($this->RoomType->save($this->request->data)) {
				$this->Session->setFlash(__('The room type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The room type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->RoomType->exists($id)) {
			throw new NotFoundException(__('Invalid room type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RoomType->save($this->request->data)) {
				$this->Session->setFlash(__('The room type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The room type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('RoomType.' . $this->RoomType->primaryKey => $id));
			$this->request->data = $this->RoomType->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->RoomType->id = $id;
		if (!$this->RoomType->exists()) {
			throw new NotFoundException(__('Invalid room type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RoomType->delete()) {
			$this->Session->setFlash(__('The room type has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The room type could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
