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
        'uf' => array(
            'label' => 'UF',
            'type' => 'select',
            'empty' => ' -- Selecione um Estado --'
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
        'nome_proprietario' => array(
            'label' => 'Nome do Propriet&aacute;rio',
        ),
        'logradouro_imovel' => array(
            'label' => 'Logradouro do Im&oacute;vel',
        ),
        'numero_contribuinte' => array(
            'label' => 'N&uacute;mero do Contribuinte',
        ),
        'transcricao' => array(
            'label' => 'Transcri&ccedil;&atilde;o',
        ),
        'endereco_imovel' => array(
            'label' => 'Endere&ccedil;o do Im&oacute;vel',
        ),
        'comarca' => array(
            'label' => 'Comarca',
        ),
        'numero_processo' => array(
            'label' => 'N&uacute;mero do Processo',
        ),
        'estado_civil' => array(
            'label' => 'Estado Civil',
        ),
        'profissao' => array(
            'label' => 'Profiss&atilde;o',
        ),
        'ano_conclusao' => array(
            'label' => 'Ano de conclus&atilde;o',
        ),
        'serie' => array(
            'label' => 'S&eacute;rie',
        ),
        'nome_escola' => array(
            'label' => 'Escola',
        ),
        'cpf_cnpj' => array(
            'label' => 'CPF/CNPJ',
        ),
        'cnh' => array(
            'label' => 'CNH',
        ),
        'crlv' => array(
            'label' => 'CRLV',
        ),
        'crlv' => array(
            'label' => 'CRLV',
        ),
        'numero_cartorio' => array(
            'label' => 'N&uacute;mero do Cart&oacute;rio',
        ),
        'cliente' => array(
            'label' => 'Cliente',
        ),
        'nome_notificado' => array(
            'label' => 'Nome do Notificado',
        ),
        'rg_notificado' => array(
            'label' => 'RG do Notificado',
        ),
        'cnpj_notificado' => array(
            'label' => 'CNPJ do Notificado',
        ),
        'endereco_notificado' => array(
            'label' => 'Endere&ccedil;o do Notificado',
        ),
        'cep_notificado' => array(
            'label' => 'CEP do Notificado',
        ),
        'cidade_notificado' => array(
            'label' => 'Cidade do Notificado',
        ),
        'banco_cobrador' => array(
            'label' => 'Banco Cobrador',
        ),
        'data_procolo' => array(
            'label' => 'Data do Protocolo',
        ),
        'protocolo' => array(
            'label' => 'Protocolo',
        ),
        'numero_documento' => array(
            'label' => 'N&uacute;mero do Documento',
        ),
        'data_protocolo' => array(
            'label' => 'Data do Protocolo',
        ),
        'data_obito' => array(
            'label' => 'Data do Óbito',
        ),
        'nome_requerido' => array(
            'label' => 'N&uacute;mero do Requerido',
        ),
        'nome_requerente' => array(
            'label' => 'N&uacute;mero do Requerente',
        ),
        'tipo_processo' => array(
            'label' => 'Tipo de Processo',
        ),
        'data_processo' => array(
            'label' => 'Data do Processo',
        ),
        'vara' => array(
            'label' => 'Vara',
        ),
        'subdistrito' => array(
            'label' => 'Subdistrito',
        ),
        'tipo_certidao' => array(
            'label' => 'Tipo de Certid&atilde;o',
        ),
        'devedor' => array(
            'label' => 'Devedor',
        ),
        'cpf_cnpj_devedor' => array(
            'label' => 'CPF/CNPJ do Devedor',
        ),
        'estado' => array(
            'label' => 'Estado',
        ),
        'numero_cheque' => array(
            'label' => 'N&uacute;mero do Cheque',
        ),
        'data_emissao' => array(
            'label' => 'Data de Emiss&atilde;o',
        ),
        'praca' => array(
            'label' => 'Pra&ccedil;a',
        ),
        'banco_sacado' => array(
            'label' => 'Banco Sacado',
        ),
        'credor' => array(
            'label' => 'Credor',
        ),
        'nome_reconhecer' => array(
            'label' => 'Nome a Reconhecer',
        ),
        'numero_ccm' => array(
            'label' => 'N&uacute;mero do CCM',
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
