<?= $this->Html->script(array('ckeditor/ckeditor.js')); ?>
<?= $this->Html->script(array('ckeditor/pt-br.js')); ?>
<?php
	print $this->Form->create( 'Page', array('enctype' => 'multipart/form-data'));
?>

<h1>Bloco 01</h1>
<div class="row-fluid">


<?php foreach ($content->bloco01 as $key => $value): ?>
	<div class="span3">
		<?= $this->BForm->input( "bloco01.{$key}.title", array( 'label' => 'Título', 'placeholder' => 'Titulo', 'value' => $value->title) ); ?>	

		 <?=  $this->BForm->input("bloco01.{$key}.content", array('type' => 'textarea', 'label' => 'Conteúdo','required'=>true, 'class'=>'ckeditor', 'value' => $value->content))?>
	</div>
<?php  endforeach;?>
</div>
<hr>
<h1>Bloco 02</h1>
<div class="row-fluid">
	<div class="span6">
		<?= $this->BForm->input( "bloco02.0.title", array( 'label' => 'Título', 'placeholder' => 'Titulo', 'value' => $content->bloco02[0]->title) ); ?>	

		 <?=  $this->BForm->input("bloco02.0.content", array('type' => 'textarea', 'label' => 'Conteúdo','required'=>true, 'class'=>'ckeditor', 'value' => $content->bloco02[0]->content))?>
		<br>
		
	</div>
	<div class="span6">
		<?= $this->BForm->input( "bloco02.1.title", array( 'label' => 'Título', 'placeholder' => 'Titulo', 'value' => $content->bloco02[1]->title) ); ?>	

		 <?=  $this->BForm->input("bloco02.1.content", array('type' => 'textarea', 'label' => 'Conteúdo','required'=>true, 'class'=>'ckeditor', 'value' => $content->bloco02[1]->content))?>
	</div>
</div>

<hr>

<h1>Bloco 03</h1>
<div class="row-fluid">

<?php foreach ($content->bloco03 as $key => $value): ?>
	<div class="span6">
		<?= $this->BForm->input( "bloco03.{$key}.title", array( 'label' => 'Título', 'placeholder' => 'Titulo', 'value' => $value->title) ); ?>	

		 <?=  $this->BForm->input("bloco03.{$key}.content", array('type' => 'textarea', 'label' => 'Conteúdo','required'=>true, 'class'=>'ckeditor', 'value' => $value->content))?>
	</div>
<?php  endforeach;?>
</div>


<?= $this->element( "submit", array( 'cancel' => "/pages/page_index" ) ) ?>
<script type="text/javascript">
	
	$(".remove_image").click(function(){
		$("#image_bloco2").hide();
	});

</script>