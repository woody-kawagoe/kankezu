<?php
App::uses('AppController', 'Controller');
/**
 * Nodes Controller
 *
 * @property Node $Node
 * @property PaginatorComponent $Paginator
 */
class NodesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');  
	//public $components = array('DebugKit.Toolbar');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="main";
		$this->Node->recursive = 0;
		$this->set('nodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout="main";
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid node'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
		$this->set('node', $this->Node->find('first', $options));
	}
/**
 * status method
 *
 * @throws NotFoundException
 * @param string $status 
 * @return void
 */
	public function status($cfrom = null) {
		$this->layout="main";
		if (!$this->Node->exists($cfrom)) {
			throw new NotFoundException(__('Invalid node'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
		$this->set('node', $this->Node->find('first', $options));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="main";
		if ($this->request->is('post')) {
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout="main";
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
			$this->request->data = $this->Node->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Node->delete()) {
			$this->Session->setFlash(__('The node has been deleted.'));
		} else {
			$this->Session->setFlash(__('The node could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
