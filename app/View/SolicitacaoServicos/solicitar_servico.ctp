<style>
    .container [class*="grid_"] {
     margin-left: 0px; 
}
</style>

<?= $this->Html->css(array('custom')) ?>
<?php
print $this->Form->create("SolicitacaoServico", array("class" => "form-horizontal", 'novalidate'));
?>

<main class="mobile-center">
    <section>
        <div class="container hr well1 ins2">
            <h2>Solicite sua certidão ou documento</h2>
            <hr>
            <?= $this->FrontEnd->message(); ?>
            <div class="row">
                <div class="col-lg-4">
                    <div style="padding-left: 25px;">
                        <h3>Certidões e documentos</h3>
                        <p><img alt="" src="http://condominiodofuturo.com/wp-content/uploads/2013/01/Certidoes_Gerais_1.jpg" style="height:198px; width:300px"></p>
                        <br/>                        

                        <p style="font-weight: bold;">
                            Solicite seu documento agora no Cartório Net.
                        </p>
                    </div>
                    <?//= $this->element('tipo_servicos', array('servicos' => $servicos_)) ?>
                </div>
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dados do Solicitante</div>
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <h6>Preencha as informações abaixo para iniciar o seu Pedido de Certidão.</h6> 
                                    <span class="req">* Campos de preenchimento obrigatório.</span>
                                </div>
                                <div class="form-group" style="padding-left: 20px;padding-right: 20px;">

                                    <div class="col-lg-12">
                                        <?= $this->BForm->input('SolicitacaoServico.nome_solicitante', array('label' => 'Nome', 'placeholder' => 'Nome ', 'div' => false, 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $this->BForm->input('SolicitacaoServico.cpf_cnpj_solicitante', array("label" => 'CPF/CNPJ', 'required' => false,'placeholder' => 'CPF/CNPJ', 'div' => false, 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $this->BForm->input('SolicitacaoServico.rg_solicitante', array("label" => 'RG', 'placeholder' => 'RG', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $this->BForm->input('SolicitacaoServico.telefone_1_solicitante', array("label" => 'Telefone 1', 'placeholder' => 'Telefone', 'required' => false,'div' => false, 'class' => 'form-control')); ?> 
                                    </div >
                                    <div class="col-lg-6">
                                        <?= $this->BForm->input('SolicitacaoServico.ramal_solicitante', array("label" => 'Ramal', 'placeholder' => 'Ramal', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $this->BForm->input('SolicitacaoServico.telefone_2_solicitante', array("label" => 'Telefone 2', 'placeholder' => 'Telefone', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= $this->BForm->input('SolicitacaoServico.cel_solicitante', array("label" => 'Celular', 'placeholder' => 'Celular', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <?= $this->BForm->input('SolicitacaoServico.email_solicitante', array("label" => 'Email', 'placeholder' => 'Email', 'div' => false, 'class' => 'form-control')); ?>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                         <div class="panel panel-default">
                        <div class="panel-heading">Endereço de Entrega</div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.endereco_entrega', array("label" => 'Endereco','placeholder'=>'Endereço' ,'div' => false, 'class' => 'form-control')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.numero_entrega', array("label" => 'N&uacute;mero','placeholder'=>'Número', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.complemento_entrega', array("label" => 'Complemento','placeholder'=>'Complemento', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.bairro_entrega', array("label" => 'Bairro','placeholder'=>'Bairro', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.cep_entrega', array("label" => 'CEP','placeholder'=>'CEP', 'div' => false, 'class' => 'form-control')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.estado_entrega', array("label" => 'Estado', 'type' => 'select', 'options' => $estados, 'empty' => '-- Selecione um estado -- ', 'div' => false, 'class' => 'form-control')); ?>
                            </div>                
                            <div class="col-lg-6">
                                <?= $this->BForm->input('SolicitacaoServico.cidade_entrega', array("label" => 'Cidade', 'type' => 'select', 'empty' => '-- Selecione uma cidade --', 'div' => false, 'class' => 'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">Dados do documento</div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?= $this->BForm->input('DadoDocumento.tipo_servico_id', array("label" => 'Serviço', 'options' => $tipos_servico, 'type' => 'select', 'empty' => '-- Selecione o Serviço --', 'div' => false, 'class' => 'form-control')); ?>   
                            </div>
                            
                            <div id="document_fields">
                                <?= $inputs ?>
                            </div>
                            <div class="col-lg-12">
                                <?= $this->BForm->input('DadoDocumento.observacao', array("label" => 'Observação', 'type' => 'textarea', 'required' => false, 'div' => false, 'class' => 'form-control')); ?>

                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                        <?= $this->element("submit3", array('cancel' => '/servicos')) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                   
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>

                <div class="col-lg-8">
                    
                </div>
            </div>
            <div class="row">    
               
            </div>
        </div>

    </section>
</main>
<script>

    link_municipios = '<?= $this->Html->url(array('controller' => 'SolicitacaoServicos', 'action' => 'getMunicipiosByUFAjax')) ?>'


    $change_municipio = function () {
        if (this.value != "") {
            $.ajax({
                url: link_municipios + '/' + this.value,
                success: function (data) {
                    var options = "";
                    data = eval('[' + data + ']')[0];

                    if (data == false) {
                        $('#DadoDocumentoCidade').html('<option value="">-- Selecione um município --</option>');
                    } else {
                        console.log(data[0]);

                        options += '<option value="">-- Selecione um município --</option>';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].label + '">' + data[i].value + '</option>';
                        }

                        $('#DadoDocumentoCidade').html(options);
                    }
                },
                beforeSend: function () {
                    // $('#document_fields').html('');
                    //$('.loader').css({display:"block"});
                },
                complete: function () {
                    //$('.loader').css({display:"none"});
                }
            });
        } else {
            $('#DadoDocumentoCidade').html('<option value="">-- Selecione um município --</option>');
        }
    };
    link_fields = '<?= $this->Html->url(array('controller' => 'SolicitacaoServicos', 'action' => 'getFieldsServico')) ?>'

    $('#DadoDocumentoTipoServicoId').bind('change', function () {
        if (this.value != "") {
            $.ajax({
                url: link_fields + '/' + this.value,
                success: function (data) {
                    $('#document_fields').html(data);
                    $('#DadoDocumentoEstado').trigger('change');
                },
                beforeSend: function () {
                    $('#document_fields').html('');
                    //$('.loader').css({display:"block"});
                },
                complete: function () {
                    $('#DadoDocumentoEstado').bind('change', $change_municipio);
                    $('#DadoDocumentoUf').bind('change', $change_municipio);
                }
            });
        } else {
            $('#document_fields').html("");
        }
    });

    $('#DadoDocumentoTipoServicoId').trigger('change');

    $('#SolicitacaoServicoEstadoEntrega').bind('change', function () {
        if (this.value != "") {
            $.ajax({
                url: link_municipios + '/' + this.value,
                success: function (data) {
                    var options = "";
                    data = eval('[' + data + ']')[0];

                    if (data == false) {
                        $('#SolicitacaoServicoCidadeEntrega').html('<option value="">-- Selecione um município --</option>');
                    } else {
                        console.log(data[0]);

                        options += '<option value="">-- Selecione um município --</option>';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].label + '">' + data[i].value + '</option>';
                        }

                        $('#SolicitacaoServicoCidadeEntrega').html(options);
                    }
                },
                beforeSend: function () {
                    // $('#document_fields').html('');
                    //$('.loader').css({display:"block"});
                },
                complete: function () {
                    //$('.loader').css({display:"none"});
                }
            });
        } else {
            $('#SolicitacaoServicoCidadeEntrega').html('<option value="">-- Selecione um município --</option>');
        }
    });
</script>