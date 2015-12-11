<?= $this->Html->css(array('custom')) ?>
<?php
print $this->Form->create("Contato", array("class" => "form-horizontal", 'novalidate'));
?>
<main class="mobile-center">
    <section>
        <div class="container hr well1 ins2">
            <?= $this->FrontEnd->message(); ?>
            <div class="row" align="center">
                <h2>Contato</h2>
            </div>
            <br/>
           
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                     <div class="panel panel-default">
                        <div class="panel-heading"><h6>Atendimento ao cliente</h6></div>
                        <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-6">
                                <?= $this->BForm->input('Contato.nome', array('label' => 'Nome', 'placeholder' => 'Nome ', 'div' => false, 'class' => 'form-control')); ?>
                                <?= $this->BForm->input('Contato.email', array("label" => 'Email', 'placeholder' => 'Email', 'div' => false, 'class' => 'form-control')); ?>
                                <?= $this->BForm->input('Contato.telefone', array("label" => 'Telefone', 'placeholder' => 'Telefone', 'div' => false, 'class' => 'form-control')); ?>
                                <?= $this->BForm->input('Contato.assunto', array("label" => 'Assunto', 'placeholder' => 'Assunto', 'div' => false, 'class' => 'form-control')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $this->BForm->input('Contato.mensagem', array("label" => 'Mensagem', 'rows'=>'11','div' => false, 'type' => 'textarea', 'class' => 'form-control')); ?> 
                            </div >
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
    </section>
</main>
