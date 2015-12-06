
<?php
print $this->Form->create("SolicitacaoServico", array("class" => "form-horizontal", 'novalidate'));
?>

<div class="control-group">
    <fieldset>
        <legend>Dados dos solicitante</legend>
        <?php
        print $this->BForm->input('SolicitacaoServico.nome_solicitante', array('label' => 'Nome', 'placeholder' => 'Nome '));
        print $this->BForm->input('SolicitacaoServico.cpf_cnpj_solicitante', array("label" => 'CPF/CNPJ'));
        print $this->BForm->input('SolicitacaoServico.rg_solicitante', array("label" => 'RG'));
        print $this->BForm->input('SolicitacaoServico.telefone_1_solicitante', array("label" => 'Telefone 1'));
        print $this->BForm->input('SolicitacaoServico.telefone_2_solicitante', array("label" => 'Telefone 2'));
        print $this->BForm->input('SolicitacaoServico.ramal_solicitante', array("label" => 'Ramal'));
        print $this->BForm->input('SolicitacaoServico.cel_solicitante', array("label" => 'Celular'));
        print $this->BForm->input('SolicitacaoServico.email_solicitante', array("label" => 'Email'));
        ?>
        <legend>Endereço de entrega</legend>

        <?php
        print $this->BForm->input('SolicitacaoServico.endereco_entrega', array("label" => 'Endereco'));
        print $this->BForm->input('SolicitacaoServico.complemento_entrega', array("label" => 'Complemento'));
        print $this->BForm->input('SolicitacaoServico.numero_entrega', array("label" => 'numero'));
        print $this->BForm->input('SolicitacaoServico.bairro_entrega', array("label" => 'Bairro'));
        print $this->BForm->input('SolicitacaoServico.cep_entrega', array("label" => 'CEP'));
        print $this->BForm->input('SolicitacaoServico.estado_entrega', array("label" => 'Estado', 'type' => 'select'));
        print $this->BForm->input('SolicitacaoServico.cidade_entrega', array("label" => 'Cidade', 'type' => 'select'));
        ?>


        <legend>Dados do documento</legend>

        <?= $this->BForm->input('DadoDocumento.tipo_servico_id', array("label" => 'Serviço', 'options' => $tipos_servico, 'type' => 'select', 'empty' => '-- Selecione o Serviço --')); ?>
        <?= $this->BForm->input('DadoDocumento.regiao', array("label" => 'Região', 'type' => 'select')); ?>
        <div id="document_fields">
            <?= $inputs ?>
        </div>        
        <?= $this->BForm->input('DadoDocumento.observacao', array("label" => 'Observação', 'type' => 'textarea')); ?>
    </fieldset>
</div>

<?= $this->element("submit", array('cancel' => '/servicos')) ?>



<script>

    link = '<?= $this->Html->url(array('controller' => 'SolicitacaoServicos', 'action' => 'getFieldsServico')) ?>'

    $('#DadoDocumentoTipoServicoId').bind('change', function () {
        if (this.value != "") {
            $.ajax({
                url: link + '/' + this.value,
                success: function (data) {
                    $('#document_fields').html(data);
                },
                beforeSend: function () {
                    $('#document_fields').html('');
                    //$('.loader').css({display:"block"});
                },
                complete: function () {
                    //$('.loader').css({display:"none"});
                }
            });
        } else {
            $('#document_fields').html("");
        }
    });
</script>