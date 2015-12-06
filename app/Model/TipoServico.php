<?php

class TipoServico extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'TipoServico';
    public $label = 'Tipos de Servi&ccedil;os;';
    public $gender = 'o';
    public $useTable = 'tipos_servicos';
    public $displayField = 'nome';
    public $fieldsInputSetting = array(
        'nome' => array(
            'label' => 'Nome',
        ),
        'endereco' => array(
            'label' => 'Endere&ccedil;o',
        ),
        'bairro' => array(
            'label' => 'Bairro',
        ),
        'cep' => array(
            'label' => 'CEP',
        ),
        'edificio' => array(
            'label' => 'Edif&iacute;cio',
        ),
        'estado' => array(
            'label' => 'Estado',
            'type' => 'select'
        ),
        'cidade' => array(
            'label' => 'Cidade',
            'type' => 'select'
        ),
        'rg' => array(
            'label' => 'RG',
        ),
        'cpf' => array(
            'label' => 'CPF',
        ),
        'cnpj' => array(
            'label' => 'CNPJ',
        ),
        'cartorio' => array(
            'label' => 'Cart&oacute;rio',
        ),
        'numero_contrato' => array(
            'label' => 'N&uacute;mero do Contrato',
        ),
    );

    /* ----------------------------------------
     * Associations
      ---------------------------------------- */


    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!',
            'required' => true
        )
    );

}
