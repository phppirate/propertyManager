<?php
App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');


/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    public function beforeFilter() {
        //parent::beforeFilter();

        if ($this->Auth->user('role') != 'admin') {
            $this->Auth->deny('index');
        }
    }
    protected function checkAdmin(){
        if ($this->Auth->user('role') != 'admin'){
            $this->Session->setFlash('You are not authorized to access this page.');
            $this->redirect(array('controller' => 'welcome', 'action' => 'index'));
        }
    }


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
        $this->checkAdmin();
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
        $this->set("title_for_layout","View User");
        if ($this->Auth->user('id') != $id){
            $this->checkAdmin();
        }
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}



    public function properties() {
        $this->set("title_for_layout","Your Properties");
        $id = $this->Auth->user('id');
        if ($this->Auth->user('id') != $id){
            $this->checkAdmin();
        }
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $user = $this->User->find('first', $options);
        $this->set('properties', $user['Property']);
    }

    public function view_property($id = null){
        if (!$this->User->Property->exists($id)) {
            throw new NotFoundException(__('Invalid property'));
        }
        $options = array('conditions' => array('Property.' . $this->User->Property->primaryKey => $id));
        $property = $this->User->Property->find('first', $options);
        $this->set('property', $property);
        $this->set("title_for_layout",$property['Property']['address']);
    }

    public function notes(){
        $id = $this->Auth->user('id');
        if ($this->Auth->user('id') != $id){
            $this->checkAdmin();
        }
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $user = $this->User->find('first', $options);
        $this->set('user', $user);
    }

/**
 * add method
 *
 * @return void
 */
	public function add() {
        $this->checkAdmin();
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$properties = $this->User->Property->find('list');
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
        if ($this->Auth->user('id') != $id){
            $this->checkAdmin();
        }
        if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
        if ($id != $this->Auth->user('id')){
            $this->Session->setFlash('Your are not aloud to edit any users but your self.');
            $this->redirect('index');
        }
		if ($this->request->is(array('post', 'put'))) {

            $passwordHasher = new SimplePasswordHasher();
            $hashed_password = $passwordHasher->hash($this->request->data['User']['password']);
            $password = $this->request->data['User']['password'];
            $conpass = $this->request->data['User']['confirmationPassword'];
            $user = $this->User->findById($id);

			if ($hashed_password == $user['User']['password'] || $password == $conpass) {
                unset($this->request->data['User']['confirmationPassword']);
                $user = $this->request->data;
                if ($this->User->save($user)) {
                    $this->Session->setFlash(__('The user has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                }
            }
            $this->Session->setFlash(__('That is not your password.'));



        } else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$properties = $this->User->Property->find('list');
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
        $this->checkAdmin();
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid email or password, try again'));
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}
