<?= $this->Html->script(array('ckeditor/ckeditor.js')); ?>
<?= $this->Html->script(array('ckeditor/pt-br.js')); ?>
<? 
	print $this->Form->create( 'Page');
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

<h1>Bloco 02</h1>
<div class="row-fluid">

<?php foreach ($content->bloco02 as $key => $value): ?>
	<div class="span3">
		<?= $this->BForm->input( "bloco02.{$key}.title", array( 'label' => 'Título', 'placeholder' => 'Titulo', 'value' => $value->title) ); ?>	

		 <?=  $this->BForm->input("bloco02.{$key}.content", array('type' => 'textarea', 'label' => 'Conteúdo','required'=>true, 'class'=>'ckeditor', 'value' => $value->content))?>
	</div>
<?php  endforeach;?>

</div>
<h1>Bloco 03</h1>
<div class="row-fluid">

<?php foreach ($content->bloco03 as $key => $value): ?>
	<div class="span3">
		<?= $this->BForm->input( "bloco03.{$key}.title", array( 'label' => 'Título', 'placeholder' => 'Titulo', 'value' => $value->title) ); ?>	

		 <?=  $this->BForm->input("bloco03.{$key}.content", array('type' => 'textarea', 'label' => 'Conteúdo','required'=>true, 'class'=>'ckeditor', 'value' => $value->content))?>
	</div>
<?php  endforeach;?>
</div>


<?= $this->element( "submit", array( 'cancel' => "/pages/page_index" ) ) ?>