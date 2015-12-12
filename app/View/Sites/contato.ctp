<?= $this->Html->css(array('custom')) ?>
<?php
print $this->Form->create("Contato", array("class" => "form-horizontal", 'novalidate'));
?>
<main class="mobile-center">
    <section>
        <div class="container hr well1 ins2">
            <h2>Contato</h2>
            <hr>
            <?= $this->FrontEnd->message(); ?>
            <div class="row">
                <div class="col-lg-4">
                    
                        <div style="padding-left: 25px;">
                            <h2>Tire suas dúvidas</h2>
                            <p><img alt="" src="http://www.desenvolviver.com.br/uploads/widget/image/451/493/45149312/dock_contato_01.jpg" style="height:198px; width:300px"></p>
                            <br/>                        

                            <p align="justify" style="font-weight: bold;">
                                Entre em contato conosco.
                            </p>
                        </div>
                   
                </div>
                <div class="col-lg-8">

                    <div class="panel panel-default">
                        <div class="panel-heading"><h6>Atendimento ao cliente</h6></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <?= $this->BForm->input('Contato.subject', array("label" => 'Assunto', 'placeholder' => 'Assunto', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('Contato.name', array('label' => 'Nome', 'placeholder' => 'Nome ', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('Contato.email', array("label" => 'Email', 'placeholder' => 'Email', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('Contato.phone', array("label" => 'Telefone', 'placeholder' => 'Telefone', 'div' => false, 'class' => 'form-control','required'=>false)); ?>
                                </div>
                                <div class="col-lg-6">
                                    <?= $this->BForm->input('Contato.message', array("label" => 'Mensagem', 'rows' => '11', 'div' => false, 'type' => 'textarea', 'class' => 'form-control')); ?> 
                                </div >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">    
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <?= $this->element("submit3", array('cancel' => '/contato')) ?>
                </div>
            </div>
        </div>
    </section>
</main>
