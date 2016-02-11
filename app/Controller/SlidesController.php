<?php

class SlidesController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "Slides";
    public $setMenu = "Slides";
    public $submenu = array('edit_slider');
    public $uses = array('Setting', 'Page', 'SolicitacaoServico', 'TipoServico', 'Repository', 'Contato');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function beforeFilter() {
        $this->Security->unlockedActions = array('admin_edit_slider');
    }
    
    public function admin_edit_slider() {

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

}
