<?php

class Setting extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'Setting';
    public $label = 'Configura&ccedil;&atilde;o';
    public $gender = 'a';
    /* ----------------------------------------
     * Associations
      ---------------------------------------- */


    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
    public $validate = array(
        "email_admin" => array(
            'rule' => 'email',
            'message' => 'Informe um email válido!',
            'allowEmpty' => true
        ),
        "email_contact" => array(
            'rule' => 'email',
            'message' => 'Informe um email válido!',
            'allowEmpty' => true
        ),
    );

    public function saveImages($img) {
        $string_img = '';
        $setting = $this->find('first');
        $this->id = $setting['Setting']['id'];
        if (!empty($img)) {
            $string_img = implode(',', $img);
        }
        return $this->saveField('slider_images', $string_img);
    }

    public function getImageSlider() {

        $setting = $this->find('first', array('fields' => 'slider_images'));
        $string_img = $setting['Setting']['slider_images'];

        return explode(',', $string_img);
    }

}
