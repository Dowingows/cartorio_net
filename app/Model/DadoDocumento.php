<?php

class DadoDocumento extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'DadoDocumento';
    public $label = 'Dados do documento';
    public $useTable = 'dados_documento';
    public $belongsTo = array(
        'TipoServico' => array(
            'foreignKey' => 'tipo_servico_id'
        ),
        'SolicitacaoServico' => array(
            'foreignKey' => 'solicitacao_servico_id'
        )
    );

    /* ----------------------------------------
     * Associations
      ---------------------------------------- */


    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
    public $validate = array(
        'solicitacao_servico_id' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!',
        ),
        'tipo_servico_id' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!',
        ),
        'endereco' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!',
        ),
        'bairro' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!',
        ),
//        'estado' => array(
//            'rule' => 'notBlank',
//            'message' => 'Esse campo não pode ser vazio!',
//            'required' => true
//        ),
//        'cidade' => array(
//            'rule' => 'notBlank',
//            'message' => 'Esse campo não pode ser vazio!',
//            'required' => true
//        ),
        'cep' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!',
        ),
        'edificio' => array(
            'rule' => 'notBlank',
            'message' => 'Esse campo não pode ser vazio!'
        ),
    );

}
