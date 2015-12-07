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

    public function getSolicitacao($id) {

        $options['contain'] = array(
            'DadoDocumento' => array('TipoServico')
        );

        $options['conditions'] = array('SolicitacaoServico.id' => $id);

        $solicitacao = $this->find('first', $options);

        $dados_documento = array();
        if (!empty($solicitacao['DadoDocumento'])) {

            $fields_array = !empty($solicitacao['DadoDocumento']['TipoServico']['fields']) ? explode(',', $solicitacao['DadoDocumento']['TipoServico']['fields']) : array();

            $dados_documento['tipo_servico_id'] = array('label' => 'Servi&ccedil;o', 'value' => $solicitacao['DadoDocumento']['TipoServico']['nome']);
            $dados_documento['regiao'] = array('label' => 'Regi&atilde;o', 'value' => $solicitacao['DadoDocumento']['regiao']);
//            pr($fields_array);
//            die;
            foreach ($fields_array as $field) {
                $label_field = empty($this->DadoDocumento->TipoServico->fieldsInputSetting[$field]['label']) ? "" : $this->DadoDocumento->TipoServico->fieldsInputSetting[$field]['label'];
                $value = $solicitacao['DadoDocumento'][$field];
                $dados_documento[$field] = array(
                    'label' => $label_field,
                    'value' => $value
                );
            }
            /*
              foreach ($solicitacao['DadoDocumento'] as $key => $value) {
              if (in_array($key, $fields_array)) {
              $label_field = empty($this->DadoDocumento->TipoServico->fieldsInputSetting[$key]['label']) ? "" : $this->DadoDocumento->TipoServico->fieldsInputSetting[$key]['label'];
              $dados_documento[$key] = array(
              'label' => $label_field,
              'value' => $value
              );
              }
              }

             */
            $dados_documento['observacao'] = array('label' => 'Observa&ccedil;&atilde;o', 'value' => $solicitacao['DadoDocumento']['regiao']);
        }

        $solicitacao['DadoDocumento'] = $dados_documento;

        return $solicitacao;
    }

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
