<?php
App::uses('AppController', 'Controller');
/**
 * PropertyDetails Controller
 *
 * @property PropertyDetail $PropertyDetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PropertyDetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PropertyDetail->recursive = 0;
		$this->set('propertyDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PropertyDetail->exists($id)) {
			throw new NotFoundException(__('Invalid property detail'));
		}
		$options = array('conditions' => array('PropertyDetail.' . $this->PropertyDetail->primaryKey => $id));
		$this->set('propertyDetail', $this->PropertyDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertyDetail->create();
			if ($this->PropertyDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The property detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property detail could not be saved. Please, try again.'));
			}
		}
		$properties = $this->PropertyDetail->Property->find('list');
		$this->set(compact('properties'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PropertyDetail->exists($id)) {
			throw new NotFoundException(__('Invalid property detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PropertyDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The property detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PropertyDetail.' . $this->PropertyDetail->primaryKey => $id));
			$this->request->data = $this->PropertyDetail->find('first', $options);
		}
		$properties = $this->PropertyDetail->Property->find('list');
		$this->set(compact('properties'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PropertyDetail->id = $id;
		if (!$this->PropertyDetail->exists()) {
			throw new NotFoundException(__('Invalid property detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PropertyDetail->delete()) {
			$this->Session->setFlash(__('The property detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The property detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
