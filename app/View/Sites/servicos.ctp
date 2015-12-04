
<?php
	print $this->Form->create( "Servico", array( "class" => "form-horizontal" ) );
?>

<div class="control-group">
    <fieldset>
        <legend>Dados dos solicitante</legend>
<?php
	print $this->BForm->input( 'Servico.name', array( 'label' => 'Nome', 'placeholder' => 'Nome ' ) );	
	print $this->BForm->input( 'Servico.cpf_cnpj_solicitante', array( "label" => 'CPF/CNPJ') );
        print $this->BForm->input( 'Servico.rg_solicitante', array( "label" => 'RG' ));
        print $this->BForm->input( 'Servico.tel1_solicitante', array( "label" => 'Telefone 1' ));
        print $this->BForm->input( 'Servico.tel2_solicitante', array( "label" => 'Telefone 2' ));
        print $this->BForm->input( 'Servico.ramal_solicitante', array( "label" => 'Ramal' ));
        print $this->BForm->input( 'Servico.cel_solicitante', array( "label" => 'Celular' ));
        print $this->BForm->input( 'Servico.email_solicitante', array( "label" => 'Email' ));
?>
         <legend>Endereço de entrega</legend>
         
     <?php    
              print $this->BForm->input( 'Servico.endereco', array( "label" => 'Endereco' ));
        print $this->BForm->input( 'Servico.complemento', array( "label" => 'Complemento' ));
        print $this->BForm->input( 'Servico.numero', array( "label" => 'numero' ));
        print $this->BForm->input( 'Servico.bairro', array( "label" => 'Bairro' ));
        print $this->BForm->input( 'Servico.cep', array( "label" => 'CEP' ));
        print $this->BForm->input( 'Servico.estado', array( "label" => 'Estado','type'=>'select' ));
        print $this->BForm->input( 'Servico.cidade', array( "label" => 'Cidade' ));
        ?>
         
         
             <legend>Dados do documento</legend>
         
     <?php    
              print $this->BForm->input( 'Servico.servico', array( "label" => 'Servico', 'type' =>'select','empty'=>'-- selecione o serviço --' ));
        print $this->BForm->input( 'Servico.complemento', array( "label" => 'Região', 'type' =>'select' ));
        print $this->BForm->input( 'Servico.observacao', array( "label" => 'Observação' ));
        
        ?>
    </fieldset>
</div>

<?= $this->element( "submit", array( 'cancel' => '/servicos' ) ) ?>