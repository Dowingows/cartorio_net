
<?php
	print $this->Form->create( 'Repository', array( 'class' => 'form-horizontal' ) );
	print $this->Form->hidden( 'Repository.id' );
	print $this->BForm->input( 'Repository.link_image', array( 'label' => 'Link', 'placeholder' => 'Link' ) );
?>


<?= $this->element( "submit", array( 'cancel' => "/repositories" ) ) ?>