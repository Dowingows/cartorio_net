<?php

class TipoServicosAdvController extends AppController{

    public $name = "TipoServicosAdv";
    public $setMenu = "TipoServicosAdv";
    public $label = 'Tipos de Servi&ccedil;os Advocatícios';
    public $submenu = array('index', 'add');
    public $uses = array('TipoServicosAdv');

    public function index(){

        $this->paginate['order'] = 'id ASC';
        $servicos = $this->paginate();
        
        $this->set("servicos", $servicos);    	
    }

    public function add() {

//        $this->checkAccess($this->name, __FUNCTION__);

        if ($this->request->isPost()) {
      		$this->TipoServicosAdv->create($this->request->data);
            if ($this->TipoServicosAdv->save()) {
                $this->setMessage('saveSuccess', 'TipoServicosAdv');
                $this->redirect(array('controller' => $this->name, 'action' => 'index'));
            } else
                $this->setMessage('saveError', 'TipoServico');
        }
    }

    public function edit($id) {

//        $this->checkAccess($this->name, __FUNCTION__);

        if (!$this->request->isPut()) {

            $this->TipoServicosAdv->contain();
            $this->data = $this->TipoServicosAdv->findById($id);
        } else {
            $this->TipoServicosAdv->id = $id;
            if ($this->TipoServicosAdv->saveField('name', $this->request->data['TipoServicosAdv']['name'])) {
                $this->setMessage('saveSuccess', 'TipoServicosAdv');
                $this->redirect(array('controller' => $this->name, 'action' => 'index'));
            } else
                $this->setMessage('saveError', 'TipoServicosAdv');
        }
    }

	public function delete($id = null) {

        //$this->checkAccess($this->name, __FUNCTION__);
  		
        if ($this->TipoServicosAdv->delete($id))
            $this->setMessage('deleteSuccess', 'TipoServicosAdv');
        else
            $this->setMessage('saveError', 'TipoServicosAdv');

        $this->redirect(array('controller' => $this->name, 'action' => 'index'));
    }
}	