<?php

class SettingsController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "Settings";
    public $setMenu = "Settings";
    public $label = 'Repositórios';
    public $submenu = array('index');
    
    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function admin_index() {
        $this->Setting->contain(array());
        $setting = $this->Setting->find('first', array('ORDER' => 'created DESC'));
        
        if (empty($setting)) {
            if ($this->request->isPost()) {
                $this->save($this->request->data);
            }
            $this->view = 'admin_add';
        } else {

            if (!$this->request->isPut()) {
                $this->data = $setting;
            } else {
                $this->save($this->request->data);
            }
            $this->view = 'admin_edit';
        }
    }

    private function save($data) {
        $this->Setting->create($data);
        if ($this->Setting->validates()) {
            if ($this->Setting->save(null, false)) {
                $this->setMessage('saveSuccess', 'Setting');
                $this->redirect(array('controller' => $this->name, 'action' => 'index'));
            } else
                $this->setMessage('saveError', 'Setting');
        } else {
            $this->setMessage('validateError');
        }
    }

}
