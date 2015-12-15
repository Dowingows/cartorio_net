<?php

class RepositoriesController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "Repositories";
    public $setMenu = "Repositories";
    public $label = 'Repositórios';
    public $submenu = array('index', 'add');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function index() {

        $this->checkAccess($this->name, __FUNCTION__);

        $repositories = $this->paginate('Repository');

        $this->set("repositories", $repositories);

        if (!$this->Repository->isWriteFolder()) {
            $this->setMessage("isWritable");
        }
    }

    public function add() {
        $this->checkAccess($this->name, __FUNCTION__);

        if ($this->request->isPost()) {


            $this->Repository->create($this->request->data);

            if ($this->Repository->validates()) {
                if ($this->Repository->save(null, false)) {
                    $this->setMessage('saveSuccess', 'Repository');

                    return $this->redirect(array('controller' => $this->name, 'action' => 'index'));
                } else {
                    $this->setMessage('saveError', 'Repository');
                }
            } else {
                $this->setMessage('validateError');
            }
        }
    }

    public function edit($id) {

        $this->checkAccess($this->name, 'add');


        if (!$this->request->isPut()) {
            
            $this->Repository->contain();
            $this->data = $this->Repository->findById($id);
            
        } else {

            $this->Repository->id = $id;
            if ($this->Repository->saveField('link_image', $this->request->data['Repository']['link_image'])) {
                $this->setMessage('saveSuccess', 'Repository');
                $this->redirect(array('controller' => $this->name, 'action' => 'index'));
            } else
                $this->setMessage('saveError', 'Repository');
        }
    }

    public function delete($id) {
        if ($this->Repository->deleteFile($id)) {
            $this->setMessage('deleteSuccess', 'Repository');
        } else {
            $this->setMessage('deleteError', 'Repository');
        }
        $this->redirect(array('controller' => $this->name, 'action' => 'index'));
    }

    public function list_json() {
        $this->layout = null;
        $this->autoRender = false;

        $list = array();
        $path = Router::url("/" . $this->Repository->folder . "/");

        $repository = $this->Repository->find('all');

        foreach ($repository as $file) {
            $url = $path . $file['Repository']['file_name'];

            $list[] = array(
                'image' => $url,
                'thumb' => $url,
                'folder' => 'Imagens'
            );
        }

        echo json_encode($list);
    }

}
