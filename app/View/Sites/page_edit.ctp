<?= $this->Html->script(array('ckeditor/ckeditor.js')); ?>
<?= $this->Html->script(array('ckeditor/pt-br.js')); ?>

<?php
	print $this->Form->create( 'Page', array( 'class' => 'form-horizontal' ) );
	print $this->Form->hidden( 'Page.id' );
	print $this->BForm->input( 'Page.title', array( 'label' => 'Título', 'placeholder' => 'Titulo' ) );	
    print $this->BForm->input('Page.content', array('label' => 'Conteúdo','required'=>true,'class'=>'ckeditor'));
    print $this->BForm->input('Page.description', array('type' => 'textarea','label' => 'Descrição', 'style' => 'width: 1000px;','rows' => 4))    

?>



<?= $this->element( "submit", array( 'cancel' => "/pages/page_index" ) ) ?>