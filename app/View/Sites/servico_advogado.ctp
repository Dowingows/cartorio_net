<?= $this->Html->css(array('custom')) ?>
<?php
print $this->Form->create("ServicoAdvogado", array("class" => "form-horizontal", 'novalidate'));
?>
<main class="mobile-center">
    <section>
        <div class="container hr well1 ins2">
            <?= $this->FrontEnd->message(); ?>
            <h2>Serviços para Advogados</h2>
            <hr>
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Atendimento ao cliente</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <?= $this->BForm->input('ServicoAdvogado.nome', array('label' => 'Nome', 'placeholder' => 'Nome ', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('ServicoAdvogado.email', array("label" => 'Email', 'placeholder' => 'Email', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('ServicoAdvogado.telefone', array("label" => 'Telefone', 'placeholder' => 'Telefone', 'div' => false, 'class' => 'form-control')); ?>
                                </div>
                                <div class="col-lg-6">
                                    <?= $this->BForm->input('ServicoAdvogado.mensagem', array("label" => 'Mensagem','rows'=>'8', 'div' => false, 'type' => 'textarea', 'class' => 'form-control')); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                </main>
