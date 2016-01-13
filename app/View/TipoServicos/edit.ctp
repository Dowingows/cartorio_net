
<?php
	print $this->Form->create( 'TipoServico', array( 'class' => 'form-horizontal' ) );
	print $this->Form->hidden( 'TipoServico.id' );
	print $this->BForm->input( 'TipoServico.nome', array( 'label' => 'Nome', 'placeholder' => 'Nome','type'=>'text','style'=>'min-width:450px') );
?>


<?= $this->element( "submit", array( 'cancel' => "/tipoServicos" ) ) ?>