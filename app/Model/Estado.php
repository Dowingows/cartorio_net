<?php

class Estado extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'Estado';
    public $label = 'Estados';
    public $displayField = 'sigla';
    public $primaryKey = 'codigo_estado';

    /* ----------------------------------------
     * Associations
      ---------------------------------------- */
    public $hasMany = array('Municipio' => array('foreignKey' => 'codigo_estado'));

    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
}
