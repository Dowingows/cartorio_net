<?= $this->Html->css(array('image-picker')) ?>
<?= $this->Html->script(array('image-picker.min')) ?>


<style>
    .image_picker_image{
        width: 200px;
    }
</style>
<?= $this->Form->create('Setting', array('class' => 'form-horizontal')); ?> 
<div class="span6">
<fieldset>
    <legend>Imagens do Slider</legend>
    
<select name="Setting[]" multiple="multiple" class="image-picker show-html">
  <?php foreach($gallery as $image):  ?>
   <?php $select = '' ;
         if(in_array($image['image'], $slider)){
             $select ='selected="selected"';
         }
   ?>
    <option <?= $select ?> data-img-src="<?= $image['image']?>" value="<?= $image['image']?>"><?= $image['label']?></option>
  <?php endforeach; ?>
</select>
</fieldset>
</div>
<div class="span5">
<?= $this->element('submit', array( 'cancel' => "/pages/page_index" ));?>
</div>

<script>
    $("select").imagepicker({show_label: true})
</script>