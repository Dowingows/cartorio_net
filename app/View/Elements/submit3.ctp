<style>
    .btn {
    padding: 14px 24px;
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}
 
.btn:focus, .btn:active:focus, .btn.active:focus {
    outline: 0 none;
}
 
.btn-primary {
    background: #0099cc;
    color: #ffffff;
}
 
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    background: #33a6cc;
}
 
.btn-primary:active, .btn-primary.active {
    background: #007299;
    box-shadow: none;
}
</style>
<div class="form-actions">
	<p class="required"><span class="req">* campos de preenchimento obrigat&oacute;rio</span> </p>
	<?php
		$options = array(
			'class' => 'btn cancel pull-left',
			'title' => 'clique para cancelar',
			'div' => false
		);
		
		if( !empty( $cancel ) )
			$options[ 'alt' ] = $this->Html->url( $cancel );
		
		if( !empty( $cancelRedirect ) )
			$options[ 'alt' ] = $this->Html->url( $cancel[ $cancelRedirect ] );
                ?>
        <div class="btn-group">
        <?php
	 	print $this->Form->button('Enviar', array( 'class' => 'btn btn-primary  btn-sm', 'div' => false, 'escape' => false ) );
	?>
        </div>
	<div class="spinner"></div>
</div>

<?= $this->Form->end() ?>