<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController
{
	public $components = array('Paginator');

	public function index()
	{
		$this->Post->recursive = 0;
		$this->set('post', $this->Paginator->paginate());
	}


	public
	function view($id = null)
	{

		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));

		$this->set('post', $this->Post->find('first', $options));

	}

	public
	function add()
	{
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));

			}
		}
	}

	public
	function edit($id = null)
	{

		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {

			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));

			}

		} else {

			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));

			$this->request->data = $this->Post->find('first', $options);

		}
	}

	public
	function delete($id = null)
	{

		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {

			$this->Session->setFlash(__('The post has been deleted.'));

		} else {

			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
