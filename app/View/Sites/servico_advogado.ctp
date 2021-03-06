<?= $this->Html->css(array('custom')) ?>
<?php
print $this->Form->create("Contato", array("class" => "form-horizontal", 'novalidate'));
?>
<main class="mobile-center">
    <section>
        <div class="container hr well1 ins2">
            <h2>Serviços advocatícios</h2>
            <hr>
                <?= $this->FrontEnd->message(); ?>
            <div class="row">
                <div class="col-lg-4">
                    <div style="padding-left: 25px;">
                        <!--<h2>Certidões</h2>-->
                        <p><img alt="" src="http://omaispositivo.com.br/wp-content/uploads/2015/03/advocacia.jpg" style="height:198px; width:300px"></p>
                        <br/>                        

                        <p style="font-weight: bold;">
                            Solicite serviços advocatícios, e consultorias processuais com a Cartório Net.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="panel panel-default">
                        <div class="panel-heading">Atendimento ao cliente</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <?= $this->BForm->input('Contato.name', array('label' => 'Nome', 'placeholder' => 'Nome ', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('Contato.email', array("label" => 'Email', 'placeholder' => 'Email', 'div' => false, 'class' => 'form-control')); ?>
                                    <?= $this->BForm->input('Contato.phone', array("label" => 'Telefone', 'placeholder' => 'Telefone', 'div' => false, 'class' => 'form-control')); ?>
                                  <?= $this->BForm->input('Contato.tipo_servico', array("label" => 'Serviços', 'type' => 'select', 'div' => false, 'class' => 'form-control', 'options' => $options, 'empty' => 'Selecione')); ?>

                                </div>
                                <div class="col-lg-6">
                                    <?= $this->BForm->input('Contato.message', array("label" => 'Descrição', 'rows' => '11', 'div' => false, 'type' => 'textarea', 'class' => 'form-control')); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">    
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <?= $this->element("submit3", array('cancel' => '/servicos-para-advogado')) ?>
                </div>
            </div>
    </section>
</main>


<style>
    .container [class*="grid_"] {
     margin-left: 0px; 
}
</style>