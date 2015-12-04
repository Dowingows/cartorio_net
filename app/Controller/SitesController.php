

<?php

class SitesController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "Sites";
    public $setMenu = "Sites";
    public $submenu = array('page_index', 'page_add');
    public $uses = array('Setting', 'Page');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function beforeFilter() {
        parent::beforeRender();
        $this->Auth->allow('index');
    }

    public function index() {

        $setting = $this->Setting->find('first');

        $this->set("setting", $setting['Setting']);

        $this->layout = "site";
    }

    public function page_index() {
        $this->set("pages", $this->paginate("Page"));
    }

    public function page_add() {
        
    }

    public function page_edit($id) {
        if (!$this->request->isPut()) {
            $this->data = $this->Page->findById($id);
        } else {

            $this->Page->create($this->request->data);

            if ($this->Page->validates()) {

                if ($this->Page->save(null, false)) {
                    $this->setMessage('saveSuccess', 'Page');
                } else
                    $this->setMessage('saveError', 'Page');
            } else
                $this->setMessage('validateError');
        }
    }

}
