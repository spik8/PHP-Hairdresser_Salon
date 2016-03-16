<?php
 App::uses('AppController', 'Controller');
 
 
 class ReservationsController extends AppController {
 
 	public function index() {
 		$this->set('reservations',$this->Reservation->find('all'));
 	}
 
 
 	public function view($id = null) {
 		$this->set('reservation', $this->Reservation->findByid($id));
 	}
 
 
 	public function add() {
 		if ($this->request->is('post')) {
 			$this->Reservation->create();
			debug($this->request->data);
 			if ($this->Reservation->save($this->request->data)) {
 				$this->Flash->success(__('Uzytkownik został dodany'));
 				return $this->redirect(array('action' => 'index'));
 			} else {
 				$this->Flash->error(__('Uzytkownik nie został dodany.'));
 			}
 		}
 	}
 
 	public function edit($id = null) {
 
 		if($this->request->is(array('post','put')))
 		{
 			$this->Reservation->id = $id;
 			if($this->Reservation->save($this->request->data))
 			{
 				$this->Flash->success('Uzytkownik zedytowany.');
 				$this->redirect('index');
 			}
 			else
 				$this->Flash->error('Brak możliwości edycji uzytkownika.');
 		}
 	}
 
 
 	public function delete($id = null) {
 		$this->Reservation->id = $id;
 		$this->request->allowMethod('post', 'delete');
 		if ($this->Reservation->delete()) {
 			$this->Flash->success(__('Rezerwacja została usunięta'));
 		} else {
 			$this->Flash->error(__('Rezerwacja nie został usunięta'));
 		}
 		return $this->redirect(array('action' => 'index'));
 	}
 }