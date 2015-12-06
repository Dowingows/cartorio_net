

<?php

class SolicitacaoServicosController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "SolicitacaoServicos";
    public $setMenu = "SolicitacaoServicos";
    public $label = 'Solicita&ccedil;&otilde;es de Servi&ccedil;os';
    public $submenu = array('servicos');
    public $uses = array('SolicitacaoServico', 'TipoServico');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function beforeFilter() {
        parent::beforeRender();
        $this->Auth->allow('solicitar_servico', 'getFieldsServico');
        $this->Security->unlockedActions = array('servicos');
    }

    public function view_solicitacao($id) {

        $this->checkAccess($this->name, __FUNCTION__);

        $this->SolicitacaoServico->contain(array('DadoDocumento'));
        $solicitacao = $this->SolicitacaoServico->findById($id);

        $this->set('solicitacao', $solicitacao);
    }

    public function servicos() {

        $this->checkAccess($this->name, __FUNCTION__);

        $this->SolicitacaoServico->contain(array());

        $this->paginate['fields'] = array('id', 'nome_solicitante', 'cpf_cnpj_solicitante', 'email_solicitante', 'email_send', 'created');

        $this->set('solicitacoes', $this->paginate('SolicitacaoServico'));
    }

    public function solicitar_servico() {
        if ($this->request->isPost()) {
            $this->SolicitacaoServico->create($this->request->data);
            if ($this->SolicitacaoServico->saveAll($this->request->data, array('validate' => 'only'))) {
                if ($this->SolicitacaoServico->saveAll($this->request->data, array('validate' => false))) {
                    $this->setMessage('saveSuccess', 'SolicitacaoServico');
                    $this->request->data = array();
                } else
                    $this->setMessage('saveError', 'SolicitacaoServico');
            } else {
                $this->setMessage('validateError');
            }
        }

        $this->set('tipos_servico', $this->TipoServico->find('list'));

        $documento = empty($this->request->data['DadoDocumento']) ? array() : $this->request->data['DadoDocumento'];
        $id = empty($documento['tipo_servico_id']) ? "0" : $documento['tipo_servico_id'];

        $inputs = $this->createInputsServico($id, $documento);

        $this->set('inputs', $inputs);
    }

    private function createInputsServico($id, $data = array()) {
        $this->TipoServico->contain(array());
        $tipos = $this->TipoServico->findById($id);
        $fields = empty($tipos['TipoServico']['fields']) ? array() : $tipos['TipoServico']['fields'];

        $fields_array = !empty($fields) ? explode(',', $fields) : "";
        $inputs = "";

        if (!empty($fields_array)) {

            App::uses('BFormHelper', 'View/Helper');
            $form = new BFormHelper(new View());
            $setting = "";
            foreach ($fields_array as $field) {
                $val = empty($data[$field]) ? "" : $data[$field];
                $setting = empty($this->TipoServico->fieldsInputSetting[$field]) ? array('label' => $field, 'value' => $val) : $this->TipoServico->fieldsInputSetting[$field];
                $inputs .= $form->input('DadoDocumento.' . $field, $setting);
            }
        }

        return $inputs;
    }

    public function getFieldsServico($id) {
        $this->layout = null;
        $this->autoRender = false;

        $inputs = $this->createInputsServico($id);

        return $inputs;
    }

}
