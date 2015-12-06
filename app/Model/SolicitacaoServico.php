<?php

class SolicitacaoServico extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'SolicitacaoServico';
    public $label = 'Solicita&ccedil;&atilde;o de Servi&ccedil;o';
    public $gender = 'a';
    public $useTable = 'solicitacoes_servicos';
    public $hasOne = array('DadoDocumento' => array('foreignKey' => 'solicitacao_servico_id'));

    /* ----------------------------------------
     * Associations
      ---------------------------------------- */


    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
    public $validate = array(
        "nome_solicitante" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
        "cpf_cnpj_solicitante" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
        "rg_solicitante" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
        "telefone_1_solicitante" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
        "email_solicitante" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
        "endereco_entrega" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
        "cep_entrega" => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
                'required' => true
            )
        ),
//        "estado_entrega" => array(
//            'notBlank' => array(
//                'rule' => 'notBlank',
//                'message' => 'Esse campo não pode ser vazio!',
//                'required' => true
//            )
//        ),
//        "cidade_entrega" => array(
//            'notBlank' => array(
//                'rule' => 'notBlank',
//                'message' => 'Esse campo não pode ser vazio!',
//                'required' => true
//            )
//        )
    );

}
