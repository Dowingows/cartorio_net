<?= $this->Form->create('MenuSite', array('class' => 'form-horizontal')); ?>

<div class="row">
    <div class="span6">
        <?php
        print $this->BForm->input('MenuSite.descricao', array('label' => 'Descrição', 'placeholder' => 'Descrição', 'type' => 'text'));
        print $this->BForm->input('MenuSite.link', array('label' => 'Link', 'placeholder' => 'Descrição'));
        print $this->BForm->input('MenuSite.posicao', array('label' => 'Posição', 'placeholder' => 'Posição'));
        ?>
    </div>
</div>

<?= $this->element("submit", array('cancel' => '/MenuSites')) ?>
