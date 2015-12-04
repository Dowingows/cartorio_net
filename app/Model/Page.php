<?php

class Page extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'Page';
    public $label = 'P&aacute;gina';
    public $gender = 'a';
    /* ----------------------------------------
     * Associations
      ---------------------------------------- */


    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
    public $validate = array(
        "title" => array(
            'rule' => 'notBlank',
            'message' => 'Insira um título!',
        ),
        "content" => array(
            'rule' => 'notBlank',
            'message' => 'Insira um conteúdo para a página!',
        ),
    );

}
