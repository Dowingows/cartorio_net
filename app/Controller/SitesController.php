

<?php

class SitesController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "Sites";
    public $setMenu = "Sites";
    public $submenu = array('index', 'add');
    public $uses = array('Setting');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function beforeFilter() {
        parent::beforeRender();
        $this->Auth->allow('index');
    }

    public function index() {
        
        $setting=$this->Setting->find('first');
        
        $this->set("setting",$setting['Setting']);
              
        $this->layout = "site";
    }
    
    public function servicos(){
        
    }

}
