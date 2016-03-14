<?php
App::uses('AppController', 'Controller');


class EmployeesController extends AppController {

	public function index() {
		$this->set('employees',$this->Employee->find('all'));
	}


	public function view($id = null) {
		$this->set('employee', $this->Employee->findByid($id));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Flash->success(__('Pracownik został dodany'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Pracownik nie został dodany.'));
			}
		}
	}

	public function edit($id = null) {

		if($this->request->is(array('post','put')))
		{
			$this->Employee->id = $id;
			if($this->Employee->save($this->request->data))
			{
				$this->Flash->success('Pracownik zedytowany.');
				$this->redirect('index');
			}
			else
				$this->Flash->error('Brak możliwości edycji pracownika.');
		}
	}


	public function delete($id = null) {
		$this->Employee->id = $id;
		$this->request->allowMethod('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Flash->success(__('Pracownik został usunięty'));
		} else {
			$this->Flash->error(__('Pracownik nie został usunięty'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
