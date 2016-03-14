<?php
App::uses('AppController', 'Controller');

class ServicesController extends AppController {
    public function index() {
        $this->set('services',$this->Service->find('all'));
    }
    public function view($id = null) {
        $this->set('service', $this->Service->findByid($id));
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Service->create();
            if ($this->Service->save($this->request->data)) {
                $this->Flash->success(__('Usługa została dodana'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Usługa nie została dodana.'));
            }
        }
    }

    public function edit($id = null) {

        if($this->request->is(array('post','put')))
        {
            $this->Service->id = $id;
            if($this->Service->save($this->request->data))
            {
                $this->Flash->success('Usługa zedytowana.');
                $this->redirect('index');
            }
            else
                $this->Flash->error('Brak możliwości edycji usługi.');
        }
    }


    public function delete($id = null) {
        $this->Service->id = $id;
        $this->request->allowMethod('post', 'delete');
        if ($this->Service->delete()) {
            $this->Flash->success(__('Usługa została usunięta'));
        } else {
            $this->Flash->error(__('Usługa nie została usunięta'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}