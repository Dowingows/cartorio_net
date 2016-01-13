<?php

class TipoServicosController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "TipoServicos";
    public $setMenu = "TipoServicos";
    public $label = 'Tipos de Servi&ccedil;os';
    public $submenu = array('index');
    public $uses = array('TipoServico');
    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function index() {

//        $this->checkAccess($this->name, __FUNCTION__);

        $this->paginate['order'] = 'id ASC';
        $servicos = $this->paginate();
        
        $this->set("servicos", $servicos);
    }

    public function edit($id) {

//        $this->checkAccess($this->name, __FUNCTION__);

        if (!$this->request->isPut()) {

            $this->TipoServico->contain();
            $this->data = $this->TipoServico->findById($id);
        } else {
            $this->TipoServico->id = $id;
            if ($this->TipoServico->saveField('nome', $this->request->data['TipoServico']['nome'])) {
                $this->setMessage('saveSuccess', 'TipoServico');
                $this->redirect(array('controller' => $this->name, 'action' => 'index'));
            } else
                $this->setMessage('saveError', 'TipoServico');
        }
    }

}
