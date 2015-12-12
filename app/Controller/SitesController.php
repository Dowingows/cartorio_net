

<?php

class SitesController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "Sites";
    public $setMenu = "Sites";
    public $submenu = array('page_index', 'page_add');
    public $uses = array('Setting', 'Page', 'SolicitacaoServico', 'TipoServico', 'Repository');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function beforeFilter() {
        parent::beforeRender();
        $this->Auth->allow('index', 'sigle_page', 'servico_advogado', 'contato');
        $this->Security->unlockedActions = array('servicos', 'edit_slider');

        $setting = $this->Setting->find('first');
        $this->set("setting", $setting['Setting']);
        $data = array();
        $data['Page']['title'] = '';
        $data['Page']['description'] = '';
        $this->set('data', $data);
    }

    public function index() {

        $data = $this->Page->findById(1);
        $json = $data['Page']['content'];
        $content = json_decode($json);

        $slider = $this->Setting->getImageSlider();
        $this->set('slider', $slider);
        $this->set("content", $content);
        $this->layout = "site";
    }

    public function sigle_page($id) {

        $data = $this->Page->findById($id);

        $this->set("data", $data);
        $this->layout = "site";
    }

    public function contato() {
        $this->layout = "site";
    }

    public function edit_slider() {

        if ($this->request->isPost()) {
            $images = array();
            if (!empty($this->request->data['Setting'])) {
                $images = $this->request->data['Setting'];
            }
            $this->Setting->saveImages($images);
        }

        $gallery = array();
        $path = Router::url("/" . $this->Repository->folder . "/");

        $repository = $this->Repository->find('all');

        foreach ($repository as $file) {
            $url = $path . $file['Repository']['file_name'];

            $gallery[] = array(
                'image' => $url,
                'thumb' => $url,
                'folder' => 'Imagens',
                'label' => $file['Repository']['name'],
            );
        }
        
        $slider_images = $this->Setting->getImageSlider();
        $this->set('slider', $slider_images);
        $this->set('gallery', $gallery);
    }

    public function page_index() {
        $this->set("pages", $this->paginate("Page"));
    }

    public function page_add() {
        
    }

    public function servico_advogado() {
        $this->layout = "site";
    }

    public function page_edit($id) {
        if (!$this->request->isPut()) {
            if ($id == 1) {
                $this->redirect(array('controller' => $this->name, 'action' => 'home_edit'));
            }

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

    public function home_edit() {

        if (!$this->request->isPost()) {
            $data = $this->Page->findById(1);

            $json = $data['Page']['content'];

            $content = json_decode($json);

            $this->set("content", $content);
        } else {
            $json;
            $data = $this->request->data;

            foreach ($data['bloco01'] as $key => $value) {
                $value['title'] = utf8_encode($value['title']);
                $value['content'] = utf8_encode($value['content']);
            }

            foreach ($data['bloco02'] as $key => $value) {
                $value['title'] = utf8_encode($value['title']);
                $value['content'] = utf8_encode($value['content']);
            }

            foreach ($data['bloco03'] as $key => $value) {
                $value['title'] = utf8_encode($value['title']);
                $value['content'] = utf8_encode($value['content']);
            }

            $json = json_encode($data);

            empty($data);


            $data['Page']['content'] = $json;


            $this->Page->create($data);
            $this->Page->id = 1;

            if ($this->Page->validates()) {

                if ($this->Page->save(null, false)) {
                    $this->setMessage('saveSuccess', 'Page');
                    $this->redirect($this->referer());
                } else
                    $this->setMessage('saveError', 'Page');
            } else
                $this->setMessage('validateError');

            //pr($json);
        }
    }

}
