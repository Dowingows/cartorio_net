<?php
	print $this->Form->create( 'TipoServicosAdv', array( 'class' => 'form-horizontal' ) );
	print $this->Form->hidden( 'TipoServicosAdv.id' );
	print $this->BForm->input( 'TipoServicosAdv.name', array( 'label' => 'Nome', 'placeholder' => 'Nome','type'=>'text','style'=>'min-width:450px') );
?>


<?= $this->element( "submit", array( 'cancel' => "/TipoServicosAdv" ) ) ?>