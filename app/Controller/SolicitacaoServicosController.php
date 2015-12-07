

<?php

class SolicitacaoServicosController extends AppController {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = "SolicitacaoServicos";
    public $setMenu = "SolicitacaoServicos";
    public $label = 'Solicita&ccedil;&otilde;es de Servi&ccedil;os';
    public $submenu = array('servicos');
    public $uses = array('SolicitacaoServico', 'Setting', 'TipoServico', 'Estado');

    /* ----------------------------------------
     * Actions
      ---------------------------------------- */

    public function beforeFilter() {
        parent::beforeRender();
        $this->Auth->allow('solicitar_servico', 'getFieldsServico', 'getMunicipiosByUFAjax');
        $this->Security->unlockedActions = array('solicitar_servico');
    }

    public function view_solicitacao($id) {

        $this->checkAccess($this->name, __FUNCTION__);

        $solicitacao = $this->SolicitacaoServico->getSolicitacao($id);

        $this->set('solicitacao', $solicitacao);
    }

    public function servicos() {

        $this->checkAccess($this->name, __FUNCTION__);

        $this->paginate['contain'] = array('DadoDocumento' => 'TipoServico');
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
                $this->setMessage('validateError', '', 3);
            }
        }

        $estados = $this->Estado->find('list', array('fields' => array('sigla', 'sigla'), 'order' => 'sigla ASC'));
        $this->set('tipos_servico', $this->TipoServico->find('list', array('order' => 'nome ASC')));
        $this->set('estados', $estados);
        $documento = empty($this->request->data['DadoDocumento']) ? array() : $this->request->data['DadoDocumento'];
        $id = empty($documento['tipo_servico_id']) ? "0" : $documento['tipo_servico_id'];

        $inputs = $this->createInputsServico($id, $documento);

        $this->set('inputs', $inputs);

        $setting = $this->Setting->find('first');
        $this->set('setting', $setting['Setting']);

        $this->layout = "site";
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
                if (empty($this->TipoServico->fieldsInputSetting[$field])) {
                    $setting = array('label' => $field, 'value' => $val);
                } else {
                    $setting = $this->TipoServico->fieldsInputSetting[$field];
                    if ($field == 'estado') {
                        $setting['options'] = $this->Estado->find('list', array('fields' => array('sigla', 'sigla'), 'order' => 'sigla ASC'));
                    }
                }
                
                $setting['div'] = false;
                $setting['class'] = 'form-control';
                
                $inputs .= '<div class="col-lg-6">';
                $inputs .= $form->input('DadoDocumento.' . $field, $setting);
                $inputs .= '</div>';
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

    public function getMunicipiosByUFAjax($uf) {
        $this->layout = null;
        $this->autoRender = false;

        $this->Estado->contain(array('Municipio' => array('fields' => 'codigo_municipio', 'nome')));
        $municipios = $this->Estado->find('first', array('conditions' => array('sigla' => $uf)));

        $municipios_list = array();
        if (!empty($municipios['Municipio'])) {

            foreach ($municipios['Municipio'] as $municipio) {
                $val = htmlentities(utf8_encode($municipio['nome']), ENT_QUOTES, 'UTF-8');
                $municipios_list[] = array('label' => $val, 'value' => $val);
            }
        }

        $json = json_encode($municipios_list);

        return $json;
    }

}
