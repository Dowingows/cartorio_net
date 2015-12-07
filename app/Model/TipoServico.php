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
        'pai' => array(
            'label' => 'Pai',
        ),
        'mae' => array(
            'label' => 'M&atilde;e',
        ),
        'data_nascimento' => array(
            'label' => 'Data de Nascimento',
        ),
        'orgao_emissor' => array(
            'label' => 'Org&atilde;o Emissor',
        ),
        'averbacao' => array(
            'label' => 'Averba&ccedil;&atilde;o',
        ),
        'data_registro' => array(
            'label' => 'Data do Registro',
        ),
        'telefone_cartorio' => array(
            'label' => 'Telefone do cart&oacute;rio',
        ),
        'endereco_cartorio' => array(
            'label' => 'Endere&ccedil;o do cart&oacute;rio',
        ),
        'cep_cartorio' => array(
            'label' => 'CEP do cart&oacute;rio',
        ),
        'endereco' => array(
            'label' => 'Endere&ccedil;o',
        ),
        'has_copia_documento' => array(
            'label' => 'Cópia do documento?',
        ),
        'bairro' => array(
            'label' => 'Bairro',
        ),
        'numero' => array(
            'label' => 'N&uacute;mero',
        ),
        'cep' => array(
            'label' => 'CEP',
            'required' => false
        ),
        'edificio' => array(
            'label' => 'Edif&iacute;cio',
        ),
        'estado' => array(
            'label' => 'Estado',
            'type' => 'select',
            'empty' => ' -- Selecione um Estado --'
        ),
        'cidade' => array(
            'label' => 'Cidade',
            'type' => 'select',
            'empty' => ' -- Selecione uma cidade --'
        ),
        'rg' => array(
            'label' => 'RG',
            'required' => false
        ),
        'cpf' => array(
            'label' => 'CPF',
            'required' => false
        ),
        'cnpj' => array(
            'label' => 'CNPJ',
            'required' => false
        ),
        'cartorio' => array(
            'label' => 'Cart&oacute;rio',
        ),
        'termo' => array(
            'label' => 'Termo',
        ),
        'data_registro' => array(
            'label' => 'Data do Registro',
        ),
        'livro' => array(
            'label' => 'Livro',
        ),
        'folha' => array(
            'label' => 'Folha',
        ),
        'registro' => array(
            'label' => 'Registro',
        ),
        'finalidade' => array(
            'label' => 'Finalidade',
        ),
        'numero_contrato' => array(
            'label' => 'N&uacute;mero do Contrato',
        ),
        'valor' => array(
            'label' => 'Valor',
        ),
        'data_expedicao' => array(
            'label' => 'Data de Expedi&ccedil;&atilde;o',
        ),
        'naturalidade' => array(
            'label' => 'Naturalidade',
        ),
        'conjuge' => array(
            'label' => 'Conjuge',
        ),
        'data_casamento' => array(
            'label' => 'Data do Casamento',
        ),
        'livro' => array(
            'label' => 'Livro',
        ),
        'matricula' => array(
            'label' => 'Matr&iacute;cula',
        ),
        'data_batismo' => array(
            'label' => 'Data de Batismo',
        ),
        'igreja' => array(
            'label' => 'Igreja',
        ),
        'padre' => array(
            'label' => 'Padre',
        ),
        'numero_nire' => array(
            'label' => 'N&uacute;mero NIRE',
        ),
        'endereco_empresa' => array(
            'label' => 'Endere&ccedil;o da Empresa',
        ),
        'ano_empresa' => array(
            'label' => 'Ano da Empresa',
        ),
        'filiacao' => array(
            'label' => 'Filia&ccedil;&atilde;o',
        ),
        'proposta' => array(
            'label' => 'Proposta',
        ),
        'esposa_esposo' => array(
            'label' => 'Esposa/Esposo',
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
