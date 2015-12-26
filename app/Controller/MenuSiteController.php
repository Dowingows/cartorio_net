<?php

class MenuSiteController extends AppController{

	public $name = 'MenuSite';
    public $setMenu = "MenuSite";
    public $submenu = array('index', 'add');
	public $uses = array('MenuSite');

	function index(){

	    //$this->checkAccess($this->name, __FUNCTION__);
	    $this->paginate['fields'] = array('MenuSite.id', 'MenuSite.descricao', 'MenuSite.link', 'MenuSite.posicao');
	    $this->paginate['order'] = "MenuSite.posicao ASC";
	    $this->set("menus", $this->paginate("MenuSite"));

	}

	function add(){

        //$this->checkAccess($this->name, __FUNCTION__);

        if ($this->request->isPost()) {

            $this->MenuSite->create($this->request->data);

            if ($this->MenuSite->validates()) {

                if ($this->MenuSite->save(null, false)) {

                    $this->setMessage('saveSuccess', 'MenuSite');
                    $this->redirect(array('controller' => $this->name, 'action' => 'index'));
                } else
                    $this->setMessage('saveError', 'MenuSite');
            } else
                $this->setMessage('validateError');
        }
	}

	function edit($id){

        //$this->checkAccess($this->name, __FUNCTION__);

        if (!$this->request->isPut()) {

            $this->MenuSite->contain();
            $this->data = $this->MenuSite->findById($id);

        } else {

            $this->MenuSite->create($this->request->data);

            if ($this->MenuSite->validates()) {

                if ($this->MenuSite->save(null, false)) {

                    $this->setMessage('saveSuccess', 'MenuSite');
                    $this->redirect(array('controller' => $this->name, 'action' => 'index'));
                } else
                    $this->setMessage('saveError', 'User');
            } else
                $this->setMessage('validateError');
        }
	}

	function delete($id){

		if ($this->MenuSite->delete($id))
            $this->setMessage('deleteSuccess', 'MenuSite');
        else
            $this->setMessage('saveError', 'MenuSite');

        $this->redirect(array('controller' => $this->name, 'action' => 'index'));
	}
}