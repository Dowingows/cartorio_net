<?php

class Contato extends AppModel {
    /* ----------------------------------------
     * Atributtes
      ---------------------------------------- */

    public $name = 'Contato';
    public $label = 'Contato';
    public $useTable = false;


    /* ----------------------------------------
     * Validation
      ---------------------------------------- */
    public $validate = array(
        'subject' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
            ),
        ),
        'name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
            ),
        ),
        'email' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
            ),
            'email' => array(
                'rule' => 'email',
                'message' => 'Informe um  email válido!',
            ),
        ),
        'message' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Esse campo não pode ser vazio!',
            ),
        ),
    );

    public function sendEmail() {

        App::import('Model', 'Setting');
        $setting_model = new Setting();

        $setting = $setting_model->find('first', array('fields' => 'email_contact'));
        $email_contact = empty($setting['Setting']['email_contact']) ? '' : $setting['Setting']['email_contact'];

        if (!empty($this->data['Contato'])) {

            $contato = $this->data['Contato'];
            App::uses('CakeEmail', 'Network/Email');

            $Email = new CakeEmail();
            $Email->config('smtp');
            $Email->template('contato', null);
            $Email->viewVars(array('contato' => $contato));
         
            $Email->to($email_contact);
            $Email->emailFormat('html');

            $Email->subject("Cartório NET - Contato: " . $contato['subject']);
            $success = false;

            try {
                if ($Email->send()) {
                    $success = true;
                } else {
                    $success = false;
                }
            } catch (Exception $e) {
//                pr($e);die;
                $success = false;
            }

            return $success;
        }
        return false;
    }

}
